<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Fun Olympic</title>
</head>

<body>
  <!--landing container-->
  <div class="landing-container">
    <div class="left">
      <h1>FunOlympic 2022</h1>
      <h3>Stream your favorite games and more!</h3>
      <div class="button">
        <!--login / register links-->
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
      </div>
    </div>
    <div class="right">
      <img src="./images/logo.png" alt="">
    </div>
    <a href="#our-service" id="explore">Explore</a>
  </div>

  <div class="our-service" id="our-service">
    <h1>Our services</h1>
    <div class="card-section">
      <div class="card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpick-kart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FNetherlands-vs-Ireland-Full-Match-Highlights-2048x1483.jpg&f=1&nofb=1&ipt=aa3b06c377898644604d235797a68b60f621dfb6e69f8b590acea1a4509fdfcf&ipo=images" alt="">
        <p>
          Videos
        </p>
        <span></span>
      </div>
      <div class="card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpick-kart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FNetherlands-vs-Ireland-Full-Match-Highlights-2048x1483.jpg&f=1&nofb=1&ipt=aa3b06c377898644604d235797a68b60f621dfb6e69f8b590acea1a4509fdfcf&ipo=images" alt="">
        <p>
          Live Stream
        </p>
        <span></span>
      </div>

      <div class="card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpick-kart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FNetherlands-vs-Ireland-Full-Match-Highlights-2048x1483.jpg&f=1&nofb=1&ipt=aa3b06c377898644604d235797a68b60f621dfb6e69f8b590acea1a4509fdfcf&ipo=images" alt="">
        <p>
          News
        </p>
        <span></span>
      </div>

      <div class="card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpick-kart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FNetherlands-vs-Ireland-Full-Match-Highlights-2048x1483.jpg&f=1&nofb=1&ipt=aa3b06c377898644604d235797a68b60f621dfb6e69f8b590acea1a4509fdfcf&ipo=images" alt="">
        <p>
          Fixtures
        </p>
        <span></span>
      </div>

      <div class="card">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpick-kart.com%2Fwp-content%2Fuploads%2F2021%2F07%2FNetherlands-vs-Ireland-Full-Match-Highlights-2048x1483.jpg&f=1&nofb=1&ipt=aa3b06c377898644604d235797a68b60f621dfb6e69f8b590acea1a4509fdfcf&ipo=images" alt="">
        <p>
          photos
        </p>
        <span></span>
      </div>
    </div>

    <div class="news-section">
      <div class="news-card-section">
        <div class="news-card">
          <img src="./images/logo.png" alt="">
          <p>$news_title</p>
          <p>$upload_date</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel architecto veniam hic aliquam voluptatem?</p>
        </div>

        <div class="news-card">
          <img src="./images/logo.png" alt="">
          <p>$news_title</p>
          <p>$upload_date</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel architecto veniam hic aliquam voluptatem?</p>
        </div>
      </div>

      <div class="fixture-card-section">
        <div class="fixture-card">
          <p>$fixture_title</p>
          <p>Sports: $category</p>
          <p>Date: $fixture_date</p>
        </div>
        <div class="fixture-card">
          <p>$fixture_title</p>
          <p>Sports: $category</p>
          <p>Date: $fixture_date</p>
        </div>
        <div class="fixture-card">
          <p>$fixture_title</p>
          <p>Sports: $category</p>
          <p>Date: $fixture_date</p>
        </div>
      </div>
    </div>
  </div>


  <?php include('./footer.php') ?>


</body>

</html>