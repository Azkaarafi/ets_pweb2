<!DOCTYPE html>
<html lang="en">

<head>
  <title>DODGE MODEL</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="backg">
    <div class="layer2">
      <section>
        <h1>
          <span class="clickable1" onclick="window.location.href='beranda.php'">DODGE</span>
        </h1>
        <div class="logo6">
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
    <div class="titlegallery">
      <h1>DODGE GALLERY</h1>
      <img src="gambar/logo2.jpg" alt="" width="10%" />
    </div>

    <div class="gallery2">
      <div class="car1">
        <img src="gambar/s.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car2">
        <img src="gambar/r.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car3">
        <img src="gambar/t.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car4">
        <img src="gambar/w.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car5">
        <img src="gambar/q.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car6">
        <img src="gambar/a.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car7">
        <img src="gambar/c.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car8">
        <img src="gambar/b.jpg" alt="dodge challenger 1" />
      </div>
      <div class="car9">
        <img src="gambar/d.jpg" alt="dodge challenger 1" />
      </div>
    </div>
  </div>
</body>

</html>