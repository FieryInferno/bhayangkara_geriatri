<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Admin BHAYANGKARA GERIATRI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic);
        body {
  font-family: 'Roboto';
  margin: 0;
  height: 100vh;
  width: 100%;
  background:
    linear-gradient(
      120deg,
      rgba(63, 94, 251, .8),
      rgba(106, 208, 217, .8)
    ), 
    url("https://wallpaperplay.com/walls/full/5/4/4/320513.jpg");
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-panel {
    width: 80%;
    height: 600px;
    background-color: #fff;
}

.login-panel div {
    width: 50%;
    height: 100%;
    float: left;
    padding-top: 10%;
}

.title{
  color: #fff;
}


.left-side {
    background:
        linear-gradient(
            120deg,
            rgba(63, 94, 251, .3),
            rgba(106, 208, 217, .8)
         ), 
         url("https://wallpaperplay.com/walls/full/5/4/4/320513.jpg"
    );
    background-size: cover;
}

.right-side {
    padding: 50px 25px;
    box-sizing: border-box;
}

.right-side h1 {
    text-transform: uppercase;
    margin: 0;
}

.right-side p {
    font-size: 10px;
    color: #888;
    margin-top: 0;
    margin-bottom: 20px;
    text-transform: lowercase;
}

.right-side input {
    margin: 10px 0;
    padding: 2.5px 0;
    width: 100%;
    border: 0;
    font-size: 17px;
    border-bottom: 2px solid #888;
}

.left-side .img {
    text-align: center;
}

.left-side .title {
text-align: center;
 top: 50%;
    left: 50%;
}

input.submit-btn {
    border: 2px solid #000;
    border-radius: 15px;
    width: 100px;
    background-color: transparent;
    font-size: 14px;
    font-weight: 900;
    padding: 5px;
}
input.submit-btn:hover {
  background:
    linear-gradient(
      120deg,
      rgba(63, 94, 251, 1),
      rgba(106, 208, 217, 1)
    );
  border: 0;
  color: #fff;
  cursor: pointer;
}

@media only screen and (max-width: 1100px) {
  .login-panel {
    width: 70%;
    height: 400px;
    background-color: #fff;
  }
}
@media only screen and (max-width: 800px) {
  .login-panel {
    width: 95%;
    height: 600px;
    background-color: #fff;
  }
  .login-panel div:first-of-type {
    width: 100%;
    height: 310px;
  }
  .login-panel div {
    width: 100%;
    height: 100px;
  }
}

*:focus {
    outline: none;
}
    </style>
</head>
<body>
    <section class="login-panel">
        <div class="left-side text-center">
          <img src="<?= base_url(); ?>asset/img/rsbm.png" alt="logo" width="200">
          <h4 class="title">SELAMAT DATANG
            <br> DI SISTEM ADMIN BHAYANGKARA GERIATRI</h4>
        
        
        <script language='javascript'>
            <?php
            
                if ($this->session->pesan) { ?>
                    alert(
                    <?= $this->session->pesan; ?>
                  );
                <?php }
              ?>
        </script>
          

        
        </div>
        <div class="right-side">
          <h1>Login</h1>
          <p>Masuk Sebagai Admin</p>
          <form class="user" action="<?= base_url(); ?>login" method="post">
          <input type="text" id="username" placeholder="Username" name="username">
          <input type="password" id="password" placeholder="Password" name="password">
          <input type="submit" value="Masuk" class="submit-btn">
          </form>
        </div>
      </section>
       <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>

</body>
</html>