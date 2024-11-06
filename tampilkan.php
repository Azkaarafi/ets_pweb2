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



  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dodge";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("bzzzzt" . mysqli_connect_error());
  }
  $query_sql = "SELECT * FROM purchase";
  $result = mysqli_query($conn, $query_sql);
  ?>
  <table border="1" cellspacing="0" cell>
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Color</th>
      <th>Drive Type</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <?php

    if (mysqli_num_rows($result) > 0) {

      for (; $row = mysqli_fetch_assoc($result); ) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo "<td>" . $row['driveType'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='7'>No Data Found</td></tr>";
    }
    ?>

  </table>

  <a href="update&delete.php"> <input style="border: 2px solid rgb(182, 24, 24);" class="edit" type="" value="Edit"></a>
  <a href="unggah.php"> <input style="margin-left:69%; border: 2px solid rgb(182, 24, 24);" class="edit" type=""
      value="Back"></a>


  <?php
  if (isset($_COOKIE['username'])) {
    echo "<p style='margin-top:6%; margin-bottom:-1%;margin-left:32%;' class='coicedence' >✨Hi," . $_COOKIE['username'] . " Good to see you✨</p>";
  } else {
    echo "<p style='margin-top:6%; margin-bottom:-1%;margin-left:32%;' class='coicedence' >Welcome, Dodge Lover!</p>";
  }


  ?>




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