<html>
<head>
    <link rel="stylesheet" href="css.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
   
 </style> 
</head>

<body><div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>We Have Received your Resume/CV,Please check your email</strong> for further notifications from company u applied. </p>
  <hr>
  <p>
    Having trouble? <a href="contact.php">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Back to Dashboard</a>
    <?php       
   if(isset($_SESSION['user']))
    {
        echo ' Thank You ' . $_SESSION['user'].'';
        echo '<a href="logout.php?logout">                <i class="fas fa-sign-out-alt"></i>        LOG OUT</a>';
    }
    else
    {
        header("location:dashboard.php");
    }
?>
  </p>
</div>
</body></html>