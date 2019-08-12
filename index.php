<?php 
// Including functions file that will be used in the html
// calling printQuote in the html container will build out a random quote with a quote, source, and category
include 'inc/functions.php';
// get a single random quote
$quote = printQuote($quotes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container-fluid px-0">
    <div class="view">
      <img src="https://source.unsplash.com/random?<?= $quote['category']; ?>" alt="Unsplash Random Image">
    <div class="mask flex-center rgba-black-strong">
      <div id="quote-box">
       <p class="quote"><?= $quote['quote']; ?></p>
       <p class="source my-4"><?= $quote['source']; ?></p>
       <h2 class="btn btn-primary category">Category: <span class="font-italic"><?= $quote['category']; ?></span></p>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
