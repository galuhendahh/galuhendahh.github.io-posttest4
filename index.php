<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PostTest 3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-info" href="#">CoffeTwins</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li>
          <a href="tambah.php">TAMBAH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Me</a>
        </li>
        <label class="switch">
          <input type="checkbox" id="cb" value="true" onchange="check()">
          <span class="slider round"></span>
      </label>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="background" id="konten">
    <div class="logo">
      <img src="bg4.jpeg" alt="" srcset="">
    </div>
    <div class="title-item">
      <p><b>All Items:</b></p>
    </div>
    <div class="konten" id="kartu">
      <div class="card-row">
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi affogato.jpeg" alt="">
            <p>Coffe Affogato</p>
            <p>Rp. 30.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi americano.jpeg" alt="">
            <p>Coffe Americano</p>
            <p>Rp. 25.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi au lait.jpeg" alt="">
            <p>Coffe Au Lait</p>
            <p>Rp. 42.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi caramel.jpeg" alt="">
            <p>Coffe Caramel</p>
            <p>Rp. 60.000 </p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi epresso.jpeg" alt="">
            <p>Coffe Epresso</p>
            <p>Rp. 25.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi late.jpeg" alt="">
            <p>Coffe Late</p>
            <p>Rp. 48.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi mocha.jpeg" alt="">
            <p>Coffe Mocha</p>
            <p>Rp. 29.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="kopi piccolo.jpeg" alt="">
            <p>Coffe Piccolo</p>
            <p>Rp. 40.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="caramel macchiato.jpeg" alt="">
            <p>Coffe Caramel Macchiato</p>
            <p>Rp. 39.000</p>
          </div>
        </div>
        <div class="card-coulmn">
          <div class="card">
            <img src="copicino.jpeg" alt="">
            <p>Coffe Cappucino</p>
            <p>Rp. 35.000</p>
          </div>
        </div>
    </div>
    </div>
    <div class="title-item">
      <p><b>About Me:</b></p>
    </div>
    <div class="profile">
      <img class="profile__image" src="foto galuh 2.jpeg" alt="profile image">
      <div class="profile__name"><p>Galuh Endah Pambudi</p></div>
      <div class="profile__title">
        <p>Informatika C'21</p>
        <p>2109106142</p>
      </div>
      <div class="profile__detail">
        <i class="icon-male"></i>
          2021
      </div>
    </div>
  </div>
  <section class="footer">
    <div class="social">
      <a href="https://instagram.com/galuhendahhh?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <ul class="list">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="#">Services</a>
      </li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Terms</a>
      </li>
      <li>
        <a href="#">Privacy Policy</a>
      </li>
    </ul>
    <p class="copyright">
      Future Coders &copy;2022 - by Galuh Endah Pambudi
    </p>
  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>