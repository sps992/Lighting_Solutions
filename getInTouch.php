<?php



if ($_POST["submit"]) {
  $result='<div class="alert alert-success">Form submitted</div>';

  if (!$_POST['name']) {

    $error="<br />Please enter your name";
  }

  if (!$_POST['email']) {

    $error.="<br />Please enter your email";
  }

  if (!$_POST['comment']) {

    $error.="<br />Please enter a comment";
  }

  if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

      $error.="<br />Please enter a valid email address";
  }

  if ($error) {

    $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';

  } else {

    if  (mail("samsedgeman@sps-graphicdesign.co.uk", "Comment from website", "Name:".$_POST['name']."

    Email: ".$_POST['email']."

    Comment: ".$_POST['comment'])) {

      $result='<div class="alert alert-success"><strong>Thank You!</strong>
      I will be in touch shortly.</div>';

    } else {

      $result='<div class="alert alert-danger">Sorry, there was an error with sending your message. Please try again later.</div>';
    }


  }

}


 ?>
<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lighting Solutions</title>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="C:/Users/sam/Desktop/test.ico">


      <!--Alert-->
      <script type="text/javascript">
      <!--("This website is currently under construction.\n \n In the meantime please contact us by either...\n \n Telephone 01726 695520\n \n Mobile 07749 768 962\n \n Email mail@lampexpress.uk\n \n Sorry for the inconvenience.");-->
      </script>
      <style>

      .navbar{
          background-color: #E6E6E6;
          font-family: Calibri;
          font-size: 60px;
          font-style: normal;
          font-weight: bold;
          line-height: 10px;

        }
      .navbar-brand{
          color:#3B3A36;
          font-size: 0.3em;
          position:relative;
          top:-6px;
          line-height: 15px;
            }

      .navLinks {
            font-size:20px;
          }

      .jumbotron{
        position:relative;
        top:50px;
        background-color:#012169;
        color:white;
        width:100%;
      }
      #jumbotronTagline{
        padding-top:10px;
      }
      .categories{
        position:relative;
        top:50px;
        align:center;
        font-size:20px;
      }

.btn:hover{
  color:white;
  background:#012169;
}
      .btn{}
        #footerDiv{
          position:relative;
          top:100px;
          padding:6px;
          width:100%;
          color:#7c7c7c;
          word-spacing: 3px;
        }
      .footerHr{
        clear:both;
        align:center;
        border-color:#b2b0b0;

      }
      .categoryImages{
        height:150px;
        margin:20px;

      }
      .box {
        background-color:#d6d6d6;
        border: 1px solid black; }
      .row {
        text-align: center;
      }
      #navbarHr{
        margin:0;
        padding:0;
        position:relative;
        top:1px;
        border-color:#012169;
      }
      .productTitle{
        font-size:40px;
        font-weight:bold;
        color:#012169;
        text-align: center;
        margin-bottom: 100px;
      }
      .alert{
        margin-top: 50px;
        text-align:center;
        font-size:1.2em;
      }
      .widthCorrection{
        height:50px;
      }
      .iconBarColor{
        background-color:#012169;
      }
      .btnBlue{
        background-color:#012169;
        color:white;
      }
      .textBlue{
        color:#012169;
      }



      </style>

    </head>

    <body>
      <nav class="navbar   navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar iconBarColor"></span>
              <span class="icon-bar iconBarColor"></span>
              <span class="icon-bar iconBarColor"></span>
            </button>
            <a class="navbar-brand" href="#">Lighting Solutions Ltd<span style="font-size:0.6em"><br />Formely known as B.G Lamps</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
      <li class="navLinks"><a class="widthCorrection"href="index.html">LED</a></li>

      </ul>
          </div><!--/.navbar-collapse -->
        </div>
        <hr id="navbarHr" />
      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="jumbotron">
        <div class="container">
          <h1>Ask the experts...</h1>
          <p id="jumbotronTagline">Always happy to help.</p>

        </div>
      </div>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">x</button>
        This Website is currently under construction, Please note that some features may not work properly.<br />Any problems please email us on: mail@lampexpress.uk
      </div>


      <!--Form-->
      <div class="container categories">
        <div class="row">
          <div class="col-md-12 col-centered">
            <h2 class="productTitle">Contact Form</h2>


          </div>
          <div class="formContainer">

    <div class="col-md-6 col-md-offset-3" id="emailForm">

      <?php echo $result; ?>
      <form method="post">
        <div class="form-group textBlue">
          <label for="name">Your Name:</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST ['name']; ?>" />
        </div>

        <div class="form-group textBlue">
          <label for="email">Your Email:</label>
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST ['email']; ?>" />
        </div>

        <div class="form-group textBlue">
          <label for="comment">Comment:</label>
          <textarea class="form-control" name="comment" placeholder="Your Comment..."><?php echo $_POST ['comment']; ?></textarea>
        </div>

        <input type="submit" name="submit"class="btn btn-lg btnBlue" />

      </form>

  </div>


            </div>




      </div> <!-- /container -->

        <footer id="footerDiv"class="text-center">
          <p>&copy; Copyright 2016-2017 Lighting Solutions</p>
        </footer>



      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>
