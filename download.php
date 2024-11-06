<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dodge";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $query_sql = "SELECT * FROM files WHERE id = $id";
  $result = mysqli_query($conn, $query_sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $filePath = 'uploads/' . $row['name'];

    if (file_exists($filePath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($filePath));

      ob_clean();
      flush();

      readfile($filePath);
      exit;
    } else {
      echo "File not found";
    }
  }
}

mysqli_close($conn);
?>