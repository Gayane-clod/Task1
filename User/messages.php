<?php

require_once __DIR__ . "./../vendor/autoload.php";
use Classes\Mail\Email as Email;


if(isset($_POST['submit'])){
    $email = new Email;
    $email->send($_POST['from'], $_POST['to'], $_POST['message']);
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<form class="container"  method="post">

<div class="form-group">
    <label for="exampleInputEmail1">From</label>
    <input type="text" name="from" class="form-control" id="exampleInputName" aria-describedby="namelHelp"> 
</div>

  <div class="form-group">
    <label for="exampleInputEmail1">To</label>
    <input type="text" name="to" class="form-control" id="exampleInputSreneame" aria-describedby="surenamelHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Textarea</label>
    <Textarea name="message" class="form-control" id="exampleInputTextarea" aria-describedby="textarealHelp"></Textarea>
   
  </div>
   
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>