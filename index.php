<?php

$presidentLinks = [
  'https://www.wikidata.org/wiki/Q1124', // Bill Clinton
  'https://www.wikidata.org/wiki/Q207',  // George W. Bush
  'https://www.wikidata.org/wiki/Q76',  // Barack Obama
  'https://www.wikidata.org/wiki/Q22686',  // Donald J. Trump
  'https://www.wikidata.org/wiki/Q6279',  // Joe Biden
];
$result = [];

foreach ($presidentLinks as  $presidentLink)
{
  
  $SingleProduct = file_get_contents($presidentLink);
  @$dom = DOMDocument::loadHTML($SingleProduct);
  $xpath = new DOMXpath($dom);
  
  $names = $xpath->query( '//h1[contains(@id, "firstHeading")]//span[contains(@class, "wikibase-title-label")]' );
  $descriptions = $xpath->query( '//div[contains(@class, "wikibase-entitytermsview-heading-description")]' );
  $DateOfBirth = $xpath->query( '//div[contains(@id, "P569")]//div[contains(@class, "wikibase-snakview-variation-valuesnak")]' );
  $Imglinks = $xpath->query( '//div[contains(@id, "P18")]//img' );
  $signature = $xpath->query( '//div[contains(@id, "P109")]//img' );
  
  $name = $names[0]->textContent;
  $description = $descriptions[0]->textContent;
  $DateOfBirth = $DateOfBirth[0]->textContent;
  $imglink = $Imglinks[0]->getAttribute('src');
  $signature = $signature[0]->getAttribute('src');
  
  
  // return $imglink. '<br>' .$name. '<br>' .$descriptions;
  
  $result[] = [$name, $description, $DateOfBirth, $imglink, $signature];
  
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.88.1">
<meta name=”robots” content=”noindex,nofollow”>
<title>Last 5 President Of The United States</title>



<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">


<style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
</style>


<!-- Custom styles for this template -->
</head>

<body class="p-0">

<div class="container">
<div class="row">
<div class="col-md-12">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="https://cdn.britannica.com/32/128632-050-ADAF81D7/Bill-Clinton-Al-Gore-Democratic-arms-New-July-16-1992.jpg" alt="" >

<div class="container">
<div class="carousel-caption text-start">
<!-- <h1></h1>
<p></p> -->
</div>
</div>
</div>

<div class="carousel-item">
<img src="https://images.theconversation.com/files/327494/original/file-20200413-141875-7vz9qp.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&h=507&fit=crop&dpr=1" alt="">

<div class="container">
<div class="carousel-caption">
<!-- <h1></h1>
<p></p> -->
</div>
</div>
</div>

<div class="carousel-item">
<img src="https://upload.wikimedia.org/wikipedia/commons/7/7f/20081102_Obama-Springsteen_Rally_in_Cleveland.JPG" alt="">

<div class="container">
<div class="carousel-caption text-end">
<!-- <h1></h1>
<p></p> -->
</div>
</div>
</div>

<div class="carousel-item">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Donald_Trump_with_supporters_%2830354747180%29.jpg" alt="">

<div class="container">
<div class="carousel-caption text-end">
<!-- <h1></h1>
<p></p> -->
</div>
</div>
</div>

<div class="carousel-item">
<img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/United_States_Capitol_outside_protesters_with_US_flag_20210106.jpg" alt="">

<div class="container">
<div class="carousel-caption text-end">
<!-- <h1></h1>
<p></p> -->
</div>
</div>
</div>

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>
</div>
</div>


<div class="container timelineContainer">
<div class="row">
<div class="col-md-10 offset-md-1">

<div id="timeline">
<div class="dot dott" id="one">
<span></span>
<date>1993-2001</date>
</div>
<div class="dot" id="two" data-bs-toggle="pill" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
<span></span>
<date>2001-2009</date>
</div>
<div class="dot" id="three">
<span></span>
<date>2009-2017</date>
</div>
<div class="dot" id="four">
<span></span>
<date>2017-2021</date>
</div>
<div class="dot" id="five">
<span></span>
<date>2021-present</date>
</div>

<div class="inside"></div>
</div>

<nav class="invisible">
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link active" id="nav1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Home</button>
<button class="nav-link" id="nav2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Profile</button>
<button class="nav-link" id="nav3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Contact</button>
<button class="nav-link" id="nav4" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">Contact</button>
<button class="nav-link" id="nav5" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">Contact</button>
</div>
</nav>

<div class="tab-content">

<div class="card mb-12 mt-5 symbul tab-pane fade show active" role="tabpanel" aria-labelledby="nav1" id="tab1">
<div class="row g-0">
<div class="col-md-4 p-2">
<img src="https:<?php echo $result[0][3] ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h4 class="card-title"><?php echo $result[0][0] ?></h4>
<p class="card-text"><?php echo $result[0][1] ?></p>
<p><b>Date Of Birth :</b> <?php echo $result[0][2] ?> </p>
<p><b>The signature Of The President : </b>
<img src="https:<?php echo $result[0][4] ?>" alt="" width="230px" height="150px">
</p>
</div>
</div>
</div>
</div>

<div class="card mb-12 mt-5 symbul tab-pane fade" role="tabpanel" aria-labelledby="nav2" id="tab2">
<div class="row g-0">
<div class="col-md-4 p-2">
<img src="https:<?php echo $result[1][3] ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h4 class="card-title"><?php echo $result[1][0] ?></h4>
<p class="card-text"><?php echo $result[1][1] ?></p>
<p><b>Date Of Birth :</b> <?php echo $result[1][2] ?> </p>
<p><b>The signature Of The President : </b>
<img src="https:<?php echo $result[1][4] ?>" alt="" width="230px" height="150px">
</p>
</div>
</div>
</div>
</div>

<div class="card mb-12 mt-5 symbul tab-pane fade" role="tabpanel" aria-labelledby="tab3" id="tab3">
<div class="row g-0">
<div class="col-md-4 p-2">
<img src="https:<?php echo $result[2][3] ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h4 class="card-title"><?php echo $result[2][0] ?></h4>
<p class="card-text"><?php echo $result[2][1] ?></p>
<p><b>Date Of Birth :</b> <?php echo $result[2][2] ?> </p>
<p><b>The signature Of The President : </b>
<img src="https:<?php echo $result[2][4] ?>" alt="" width="230px" height="150px">
</p>
</div>
</div>
</div>
</div>

<div class="card mb-12 mt-5 symbul tab-pane fade" role="tabpanel" aria-labelledby="tab4" id="tab4">
<div class="row g-0">
<div class="col-md-4 p-2">
<img src="https:<?php echo $result[3][3] ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h4 class="card-title"><?php echo $result[3][0] ?></h4>
<p class="card-text"><?php echo $result[3][1] ?></p>
<p><b>Date Of Birth :</b> <?php echo $result[3][2] ?> </p>
<p><b>The signature Of The President : </b>
<img src="https:<?php echo $result[3][4] ?>" alt="" width="230px" height="150px">
</p>
</div>
</div>
</div>
</div>

<div class="card mb-12 mt-5 symbul tab-pane fade" role="tabpanel" aria-labelledby="tab5" id="tab5">
<div class="row g-0">
<div class="col-md-4 p-2">
<img src="https:<?php echo $result[4][3] ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h4 class="card-title"><?php echo $result[4][0] ?></h4>
<p class="card-text"><?php echo $result[4][1] ?></p>
<p><b>Date Of Birth :</b> <?php echo $result[4][2] ?> </p>
<p><b>The signature Of The President : </b>
<img src="https:<?php echo $result[4][4] ?>" alt="" width="230px" height="150px">
</p>
</div>
</div>
</div>
</div>

</div>


</div>
</div>
</div>

<hr class="mt-5">

<footer class="text-center bg-dark mt-5 pt-3 pb-3">
<h6 class="mb-0 text-white">A Tiny Project By Me</h6>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
