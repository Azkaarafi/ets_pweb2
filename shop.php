<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dodge";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $type = isset($_POST['type']) ? $_POST['type'] : '';
  $color = isset($_POST['color']) ? $_POST['color'] : '';
  $driveType = isset($_POST['driveType']) ? $_POST['driveType'] : '';
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $query_sql = "INSERT INTO purchase (type, color, driveType, name, email, phone,password) VALUES ('$type', '$color', '$driveType', '$name', '$email', '$phone','$password')";

  // if (mysqli_query($conn, $query_sql)) {
  //   header("Location: index3.php");
  //   exit();
  // } else {
  //   echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
  // }
  if (mysqli_query($conn, $query_sql)) {
    setcookie("username", $name, time() + 3600, "/");
    header("Location: unggah.php");
    exit();
  } else {
    echo "Error: " . $query_sql . "<br>" . mysqli_error($conn);
  }


  if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx');
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 1000000) {
          $fileContent = addslashes(file_get_contents($fileTmpName));
          $sql = "INSERT INTO files (name, type, content) VALUES ('$fileName', '$fileType', '$fileContent')";
          mysqli_query($conn, $sql);
        } else {
          echo "File terlalu besar.";
        }
      } else {
        echo "Terjadi kesalahan saat mengunggah file.";
      }
    } else {
      echo "Tipe file tidak diizinkan.";
    }
  }


}



?>
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
    <p>GET YOUR DOGDE</p>
    <img src="gambar/blackyy.png" alt="" width="7%" />
  </div>
  <hr style="width: 50%; border: 1.4px solid black" />
  <section>
    <div class="slideman">
      <img src="gambar/clgrr.png" alt="dodge challenger 1" />
      <div class="huaaa">
        <h3>Challenger</h3>
        <p><strong>MSRP*</strong>: Starting at $30,000</p>
        <p><strong>Horsepower</strong>: Up to 807 HP (Supercharged)</p>
        <p><strong>Top Speed</strong>: 197 mph</p>
        <p><strong>0-60 mph</strong>: 3.4 seconds</p>
      </div>
    </div>
    <div class="slideman">
      <img src="gambar/hellcat.png" alt="dodge challenger 1" />
      <div class="huaaa">
        <h3>Dodge Hellcat</h3>
        <p><strong>MSRP*</strong>: Starting at $60,000</p>
        <p><strong>Horsepower</strong>: 717 HP</p>
        <p><strong>Top Speed</strong>: 199 mph</p>
        <p><strong>0-60 mph</strong>: 3.6 seconds</p>
      </div>
    </div>
    <div class="slideman">
      <img src="gambar/durango.png" alt="dodge challenger 1" />
      <div class="huaaa">
        <h3>Dodge Durango</h3>
        <p><strong>MSRP*</strong>: Starting at $36,000</p>
        <p><strong>Horsepower</strong>: Up to 360 HP</p>
        <p><strong>Top Speed</strong>: 130 mph</p>
        <p><strong>0-60 mph</strong>: 6.2 seconds</p>
      </div>
    </div>
    <button class="previous" onclick="changeSlide(-1)">&#10094;</button>
    <button class="nexus" onclick="changeSlide(1)">&#10095;</button>
  </section>
  <!-- <form id="buyying" onsubmit="return submitForm();"> -->
  <form id="buyying" action="" method="POST">
    <div class="buyyer">
      <p>VEHICLE INFORMATION:</p>
      <select name="type" id="type" required>
        <option value="" disabled selected>Model</option>
        <option value="chalangger">Challenger</option>
        <option value="hellcat">Hellcat</option>
        <option value="Durango">Durango</option>
      </select>
      <select name="color" id="color" required>
        <option value="" disabled selected>Color</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="yellow">Yellow</option>
        <option value="silver">Silver</option>
      </select>
      <select name="driveType" id="driveType" required>
        <option value="" disabled selected>Drive Type</option>
        <option value="fwd">Front-Wheel Drive (FWD)</option>
        <option value="rwd">Rear-Wheel Drive (RWD)</option>
        <option value="awd">All-Wheel Drive (AWD)</option>
      </select>
    </div>
    <div class="buyyer2">
      <p>YOUR INFORMATION:</p>
      <input type="text" id="name" name="name" required placeholder="Name" />
      <br />
      <input type="email" id="email" name="email" required placeholder="Email" />
      <br />
      <input type="tel" id="phone" name="phone" required placeholder="Phone Number" />
      <input type="password" id="password" name="password" required placeholder="password" />
    </div>
    <div class="saske">
      <input class="minitoner" style="border: 2px solid rgb(182, 24, 24);" type="submit" value="Submit">
      <!-- <button style="
              width: 170px;
              font-size: 20px;
              border: 1px solid #ffffff;
              border-radius: 7px;
              background-color: rgb(0, 0, 0);
              color: #ffffff;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              cursor: pointer;
              margin-top: 15%;
              margin-left: 85.95%;
              z-index: 0;
              position: absolute;
            " onmouseover="this.style.backgroundColor='red';" onmouseout="this.style.backgroundColor='rgb(0, 0, 0)';"
          type="submit">
          Submit
        </button> -->
    </div>
  </form>


  <div class="basabasi">
    <p>
      AZKA CORPORATION does not intentionally market to children under 18
      years old. By submitting this request, you're confirming that you're
      18 years or older. If not, beware! Azka might impose a punishment like
      making you binge-watch funny cat videos for 24 hours straight! AZKA
      CORPORATION understands the importance of your online privacy. By
      submitting your mobile phone number, you also acknowledge that AZKA
      CORPORATION or its parent, subsidiary, or affiliated companies, or one
      of their authorized dealers or representatives may send you commercial
      text messages. Don’t be alarmed if you hear a robot voice; it’s just
      technology doing its thing! By submitting your registration, you
      consent to this type of contact and generally agree to AZKA
      CORPORATION’s online privacy policy. Standard text message and data
      rates may apply. You can opt out anytime, but we’re not responsible if
      Azka imposes another punishment, like serenading you with “Baby Shark”
      on repeat!
    </p>
  </div>
  <br />
  <br />
  <br />
  <br />
  <br />
  <hr style="width: 50%; border: 1.4px solid black" />
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