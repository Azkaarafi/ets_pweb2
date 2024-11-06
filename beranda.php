<!DOCTYPE html>
<html lang="en">

<head>
  <title>kaispage</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
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
  <div class="backg">
    <section>
      <img src="gambar/beranda.jpg" alt="dodge challenger 1" class="slide" width="1000" height="700" />
      <video class="slide" width="600" height="950" autoplay muted loop>
        <source src="video/intro1.mp4" type="video/mp4" />
        <source src="video/intro1.ogg" type="video/ogg" />
      </video>
      <video class="sliding" width="700" height="600" autoplay muted loop>
        <source src="video/intro2.mp4" type="video/mp4" />
        <source src="video/intro2.ogg" type="video/ogg" />
      </video>
      <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
      <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </section>
  </div>
  <div class="fade-in">
    <div class="model">
      <h1>A TRIBUTE TO POWER</h1>
      <hr class="hr" />
    </div>
    <div class="image-container">
      <video class="additional-image" width="600" height="950" autoplay muted loop>
        <!-- <img
        src="c:/Users/Azka/Downloads/t.jpg"
        alt="Dodge Crop"
        class="additional-image"
        width="5%"
      /> -->
        <source src="video/intro3.mp4" type="video/mp4" />
        <source src="video/intro3.ogg" type="video/ogg" />
      </video>
      <div class="info-box">
        <h2>THE HISTORY MAKER</h2>
        <p>
          On August 15, 2022, Stellantis previously announced that production
          of the Dodge Challenger, Charger, and Chrysler 300 would end after
          the 2023 model year, citing tightening US EPA emissions requirements
          as the reason for doing so.In response, the company announced a
          series of "Last Call" models with special paint and unique trim
          commemorating the Challenger and Charger. The final Dodge
          Challenger, the Pitch-Black Demon 170, rolled off the Brampton
          assembly line on December 22, 2023; it was also the last vehicle to
          be built based on a derivative of the long-running Chrysler LX
          Platform, which began in 2004 for the 2005 model year. Once
          production ended, the Brampton, Ontario assembly plant would be
          retooled to assemble electric vehicles as well as the next
          generation Jeep Compass.
        </p>
      </div>
      <span class="find-more">
        <a href="galery.php">FIND MORE</a>
      </span>
    </div>

    <div>
      <div class="model">
        <h1>CHALLENGER SRT<sup>®</sup> HELLCAT WIDEBODY</h1>
        <hr class="hr" />
      </div>
      <!-- <div class="gallery">
          <img src="c:/Users/Azka/Downloads/s.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/r.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/t.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/w.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/q.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/a.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/c.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/b.jpg" alt="dodge challenger 1" />
          <img src="c:/Users/Azka/Downloads/d.jpg" alt="dodge challenger 1" />
        </div> -->
      <div class="hack">
        <img src="gambar/logosrthitam.jpg" alt="dodge challenger 1" width="30%" />
      </div>
      <div class="antivenom">
        <img src="gambar/display.jpg" alt="dodge challenger 1" width="100%" />
      </div>
      <div class="gallery">
        <div class="hover1">
          <img src="gambar/dashboard.jpg" alt="dodge challenger 1" />
        </div>
        <div class="hover2">
          <img src="gambar/ban.jpg" alt="dodge challenger 1" />
        </div>
      </div>
      <div class="t1">
        <p>
          <strong>PERFORMANCE DASHBOARD <br /><br /></strong>The Challenger
          SRT® Hellcat's dashboard features a digital <br />
          instrument cluster and a large touchscreen with Performance Pages,
          <br />giving you instant access to horsepower stats, drive modes,<br />
          and more, all wrapped in a sleek, focused design.
        </p>
      </div>
      <div class="t2">
        <p>
          <strong> EXTRA -WIDE FENDERS <br /><br /></strong>
          The fenders of the Challenger SRT® Hellcat<br />
          Widebody brought 3.5 extra inches to the game, and housed wider
          <br />
          tires—meaning superior handling, better grip, and a stance that
          scared <br />off Sunday drivers.
        </p>
      </div>

      <p>ajibahbjiaab</p>
    </div>

    <div class="about-us">
      <h2>About Me</h2>
      <p>
        Welcome to the world of Dodge! Im huge fans of Dodge muscle cars, and
        im exited share our passion for these amazing vehicles. feel free to
        check out our Instagram at
        <a class="colorhref" target="_blank"
          href="https://www.instagram.com/pokcoydnsslave1usy41uu/?hl=id"><strong>@pokcoydnsslave1usy41uud</strong></a>.
        If you have any questions, feedback contact me at
        <a class="colorhref" target="_blank"
          href="https://www.youtube.com/shorts/2ZQFlGLVtXg"><strong>rahmanazkarafi@gmail.com</strong></a>. i will give
        you a great journey because my car engines sounds"hala
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

      let slides = document.querySelectorAll(".slide, .sliding");

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