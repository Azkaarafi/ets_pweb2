<!DOCTYPE html>
<html lang="en">

<head>
  <title>CSS Website Layout</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
</head>

<body style="background-color: white">
  <div class="layer1">
    <section>
      <h1>
        <span class="clickable" onclick="window.location.href='beranda.php'">DODGE</span>
      </h1>
      <div class="logo5">
        <img src="gambar/logosrtred.jpg" alt="" width="20%" />
      </div>
      <div class="balancer2">
        <a style="cursor:pointer;" onclick="muncul()">VEHICLE</a>
      </div>
      <a href="shop.php">DOGDE MUSCLE</a>
      <a href="galery.php">DOGDE GALLERY</a>
      <a href="shop.php">DOGDE POWER BROKERS</a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a><a href=""></a>
      <a href=""></a>
      <div class="balancer">
        <div class="plis">
          <p>|</p>
        </div>
      </div>

      <a href="shop.php">SHOP ONLINE</a>
    </section>
  </div>
  <img id="temp" src="gambar/ceil.png" alt=""
    style=" position:absolute; margin-left: 7%; margin-top:0.4%; width: 500px; height: auto; display: none; z-index: 10; ">
  <div id="temperat1"
    style="color: black; font-family: 'Times New Roman'; margin-top: 15%; margin-left: 20%; display: none; position:absolute; z-index: 10; font-size: 20px;">
    <a href="shop.php" style="color: black; text-decoration: none;" onmouseover="this.style.color='red'"
      onmouseout="this.style.color='black'">
      <p><strong>Challenger</strong></p>
      <p><strong>MSRP*</strong>: Starting at $30,000</p>
    </a>
  </div>
  <div id="temperat2"
    style="color: black; font-family: 'Times New Roman'; margin-top: 23%; margin-left: 20%; display: none; position:absolute; z-index: 10; font-size: 20px;">
    <a href="shop.php" style="color: black; text-decoration: none;" onmouseover="this.style.color='red'"
      onmouseout="this.style.color='black'">
      <p><strong>Dodge Hellcat</strong></p>
      <p><strong>MSRP*</strong>: Starting at $60,000</p>
    </a>
  </div>
  <div id="temperat3"
    style="color: black; font-family: 'Times New Roman'; margin-top: 7%; margin-left: 20%; display: none; position:absolute; z-index: 10; font-size: 20px;">
    <a href="shop.php" style="color: black; text-decoration: none;" onmouseover="this.style.color='red'"
      onmouseout="this.style.color='black'">
      <p><strong>Durango</strong></p>
      <p><strong>MSRP*</strong>: Starting at $36,000</p>
    </a>
  </div>


  <script>
    function muncul() {
      const gambar = document.getElementById("temp");
      const tulisan1 = document.getElementById("temperat1");
      const tulisan2 = document.getElementById("temperat2");
      const tulisan3 = document.getElementById("temperat3");

      if (gambar.style.display === "none") {
        gambar.style.display = "block";
        tulisan1.style.display = "block";
        tulisan2.style.display = "block";
        tulisan3.style.display = "block";
      } else {
        gambar.style.display = "none";
        tulisan1.style.display = "none";
        tulisan2.style.display = "none";
        tulisan3.style.display = "none";
      }
    }
  </script>
  <div class="coicedence">
    <p style=" margin-left: -18%; ">FILE HAS UPLOADED TO DATABASE</p>
    <img src="gambar/blackyy.png" alt="" width="7%" />
  </div>
  <hr style="width: 50%; border: 1.4px solid black" />



  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dodge";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("error: " . mysqli_connect_error());
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
      $fileName = $_FILES['file']['name'];
      $fileTmpPath = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileType = $_FILES['file']['type'];

      $destination = 'uploads/' . $fileName;
      if (move_uploaded_file($fileTmpPath, $destination)) {
        $query_sql = "INSERT INTO files (name, type, size) VALUES ('$fileName', '$fileType', '$fileSize')";
        if (mysqli_query($conn, $query_sql)) {
          //echo "File has uploaded to database.";
        } else {
          echo "error" . mysqli_error($conn);
        }
      }
    }
  }

  mysqli_close($conn);
  ?>
  <a href="unggah.php"> <input
      style=" width: 15%; font-size: 30px;  margin-left:41.5%; margin-top:8%; border: 2px solid rgb(182, 24, 24);"
      class="edit" type="" value="Back"></a>




  <br />
  <br />
  <br />
  <br />
  <br />
  <hr style="margin-top:18%;width: 50%; border: 1.4px solid black" />
  <div class="about-me">
    <h2>About Me</h2>
    <p>
      Welcome to the world of Dodge! I'm a huge fan of Dodge muscle cars,
      and I'm excited to share our passion for these amazing vehicles. Feel
      free to check out our Instagram at
      <a class="colorhref" target="_blank"
        href="https://www.instagram.com/pokcoydnsslave1usy41uu/?hl=id"><strong>@pokcoydnsslave1usy41uud</strong></a>.
      If you have any questions or feedback, contact me at
      <a class="colorhref" target="_blank"
        href="https://www.youtube.com/shorts/2ZQFlGLVtXg"><strong>rahmanazkarafi@gmail.com</strong></a>. I will give
      you a great journey because my car engines sound "hala
      onic"!
    </p>
  </div>

  <script>
    let slideIndex = 0;
    showSlide(slideIndex);

    function changeSlide(n) {
      showSlide((slideIndex += n));
    }

    function showSlide(n) {
      let slides = document.querySelectorAll(".slideman, .slidingman");

      if (n >= slides.length) {
        slideIndex = 0;
      }
      if (n < 0) {
        slideIndex = slides.length - 1;
      }

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.opacity = 0;
        slides[i].style.display = "none";
      }

      slides[slideIndex].style.display = "block";
      setTimeout(() => {
        slides[slideIndex].style.opacity = 1;
      }, 10);
    }
  </script>


</body>

</html>