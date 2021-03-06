<?php
require __DIR__ . '/src/Bundle/bundle.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fpablo - Bootstrap Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">FpabloTest<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.html">Home</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside>
		<div id="colorlib-main">
			
			<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Articles</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
          </div>
        </div>
    		<div class="row">
    			<?php foreach ( $Articles as $item): ?>
				<?php $user = $gen->getUser(); ?>
				
    			<div class="col-md-4">
    				<div class="blog-entry ftco-animate">
							<a href="<?php echo $item->url; ?>" class="img img-2" style="background-image: url(<?php echo $item->urlToImage; ?>);" target="_blank"></a>
							<div class="text text-2 pt-2 mt-3">
								<span class="category mb-3 d-block"><a href="<?php echo $item->url; ?>" target="_blank"><?php echo $item->source->name; ?></a></span>
	              <h3 class="mb-4"><a href="<?php echo $item->url; ?>" target="_blank"><?php echo $item->title; ?></a></h3>
	              <p class="mb-4"><?php echo $item->description; ?></p>
	              <div class="author mb-4 d-flex align-items-center">
	            		<a href="#" class="img" style="background-image: url(<?php echo $user->getPicture(); ?>);"></a>
	            		<div class="ml-3 info">
	            			<span>Written by</span>
	            			<h3><a href="#"><?php echo $user->getName(); ?></a>, <span><?php echo date("F j, Y", strtotime($item->publishedAt)); ?></span></h3>
	            		</div>
	            	</div>
	              <div class="meta-wrap align-items-center">
	              	
	              	<div class="half">
		              	<p><a href="<?php echo $item->url; ?>" class="btn py-2" target="_blank">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
	              	</div>
	              </div>
	            </div>
						</div>
    			</div>
				
				<?php endforeach; ?>
    		</div>
    	</div>
		<!-- Pagination -->
        <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                    <a class="page-link"
                        href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>">Previous</a>
                </li>

                <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                    <a class="page-link" href="index.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                </li>
                <?php endfor; ?>

                <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                    <a class="page-link"
                        href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container px-md-5">
        
        <div class="row">
          <div class="col-md-12">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
 </p>
          </div>
        </div>
      </div>
    </footer>
		</div>
	</div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>