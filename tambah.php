<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PostTest 3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
/* .navbar{
    margin-bottom: 25px;
} */
.logo img{
    width: 100%;
    height: 500px;
    margin-bottom: 25px;
}

.text-center{
    background-color:#343a40;
}


.card img{
    height: 200px;
    width: 200px;
    display:block; margin:auto;
    transition: 0.8s;
}
.title-item{
    margin-left: 10px;
}
.card-row{
    text-align: center;
    width: 100%;
    margin: 0 5px;
}
.card-coulmn{
    width: 20%;
    float: left;
    padding: 2 16px;
    margin-bottom: 20px;
}

.card:hover{
    background-color: rgb(251, 174, 97);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.8);
}

.profile{
    font-family: sans-serif;
    text-align: center;
    max-width: 200px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin:auto;
    margin-bottom: 25px;
}

.profile__image{
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin: 0 auto 20px auto;
    display: block;
}

.profile__name{
    font-size: 0.9em;
    font-weight: bold;
}



.profile_detail{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9em;
}

/* CSS ABOUT */
.card-name{
    background-color:lightyellow;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
    width: 200px;
    margin-bottom: 25px;
   
    
}

.card-name img{
    height: 200px;
    width: 200px;

}

.footer{
    font-family:'Sege UI';
    font-weight: 400;
    margin-top: 300px;
    background-color:#343a40;
    padding: 40px 0;
    
}

.footer .social{
    text-align: center;
    padding-bottom: 25px;
    color: #929ca5;
}

.footer .social a{
    font-size: 24px;
    color: inherit;
    border: 1px solid #cccc;
    width: 40px;
    height: 40px;
    line-height: 38px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    margin: 0 8px;
    opacity: 0.75;
}

.footer .social a:hover{
    opacity: 0.9;
}

.footer ul{
    margin-top:0;
    padding: 0;
    list-style: none;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 0;
    text-align: center;
}

.footer ul li a{
    color:#cccc ;
    text-decoration: none;
    opacity: 0.8;
}

.footer ul li a:hover{
    opacity: 1;
}

.footer ul li{
    display: inline-block;
    padding: 0 15px;
}

.footer .copyright{
    /* margin-top: 15px; */
    text-align: center;
    font-size: 13px;
    color: #929ca5;
}
    
@media screen and (max-width: 600px) {
    .logo img{
        width: 100%;
    }
    .card-coulmn{
        width: 100%;
        display: block;
        margin-bottom: 20px;
    }
    .footer{
        width: 100%;
        height: 100%;
        
        
    }
}


.background
{
    background-color: white;
}

.backgroundDark
{
    background-color: rgb(27, 27, 27);
    color: white;
}

.card
{
    background-color: white;
    padding: 16px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
}



.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #3d3d3d;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #3d3d3d;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }

  .inputBox
  {
    border-radius: 10px;
    background-color: rgb(189, 189, 189);
    width: 300px;
    margin-top: 50px;
    padding: 20px;
    margin-left: 300px;
  }

  .inputBox p
  {
    text-align: center;
  }

  .box input
  {
    border-radius: 10px;
    width: 250px;
     text-align: center;
  }

  .btn
  {
    margin-left: 80px;
    border-radius: 8px;
    background-color: navy;
    color: white;
    text-align: center;
  }

  </style>
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


  <div class="inputBox">
    <form action="myCofee.php" method="post" enctype="multipart/form-data">
        <p>Masukan GAMBAR</p>
        <input type="file" name="gambar">
        
        <div class="box">
            <p>NAMA KOPI</p>
            <input type="text" name="nama" placeholder="masukan nama kopi......">
            <p>HARGA</p>
            <input type="number" name="harga" placeholder="masukan harga......."> <br> <br>
        </div>

        <button class="btn" type="submit" name="input">TAMBAH</button>
    </form>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>