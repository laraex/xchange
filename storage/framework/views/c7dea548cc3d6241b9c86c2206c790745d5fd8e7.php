<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koinone - Trade Page</title>
	  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('/public/gilt/img/favicon.png')); ?>"/>
	
	<!-- Appple Touch Icons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('/public/gilt/img/apple-touch-icon-57x57.png')); ?>"/>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('/public/gilt/img/apple-touch-icon-72x72.png')); ?>"/>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('/public/gilt/img/apple-touch-icon-114x114.png')); ?>"/>
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('/public/gilt/img/apple-touch-icon-144x144.png')); ?>"/>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('/public/gilt/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="<?php echo e(asset('/public/gilt/css/half-slider.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/style.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/media-query.css')); ?>" rel="stylesheet">
	 <!-- Custom styles for font awsome this template -->
	 <link href="<?php echo e(asset('/public/gilt/css/brands.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fa-brands.min.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fa-regular.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fa-regular.min.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fa-solid.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fa-solid.min.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fontawesome.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fontawesome.min.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fontawesome-all.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(asset('/public/gilt/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
   <link href="<?php echo e(asset('/public/gilt/css/custom.css')); ?>" rel="stylesheet">
	 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
   <script>
      bu = "<?php echo e(url('/')); ?>";
      
   </script>
    <?php echo $__env->yieldContent('headerjs'); ?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-darkblue fixed-top header-menu">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(url('/trade/eth-xrp')); ?>"><img width="100" src="<?php echo e(asset('/public/gilt/img/logo.png')); ?>"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto logo-menu">
            <li class="nav-item first">
              <a class="nav-link" href="<?php echo e(url('/trade/eth-xrp')); ?>">Exchange</a>
            </li>
                       
          </ul>         
		  <ul class="navbar-nav ml-auto">
			
			<li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/news')); ?>">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('/addtoken')); ?>">Add Token</a>
            </li>
			
			<li class="nav-item dropdown last">              
			  <a class="nav-link dropdown-toggle" href="#" id="navbarWallet" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Wallet
              </a>			 
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarWallet">
                <a class="dropdown-item first" href="<?php echo e(url('/wallet')); ?>">Crypto Wallet</a>
                <a class="dropdown-item" href="<?php echo e(url('/balance')); ?>">INR Wallet</a>				
              </div>			  
            </li>
			
			<li class="nav-item dropdown last">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-bell"></i> Notification
				  </a>
				  <div id="notifications" class="dropdown-menu dropdown-menu-right notif-s" aria-labelledby="navbarDropdownPortfolio"></div>
            </li>
				
			<li class="nav-item dropdown last">              
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Session::get('sess_userfname')); ?>

              </a>
			 
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item first" href="<?php echo e(url('/profile')); ?>">Profile</a>                
				<a class="dropdown-item" href="<?php echo e(url('/history')); ?>">History</a>
				<a class="dropdown-item" href="<?php echo e(url('/secure/logout')); ?>">Logout</a>
              </div>
			  
            </li>
            
          </ul>
		  
        </div>
      </div>
    </nav>

   	<?php echo $__env->yieldContent('content'); ?>

		<footer class="dark-footer">
      <div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-3">
				<div class="abloutftr">
						<a href="#"><img src="<?php echo e(asset('/public/gilt/img/footerlogo.png')); ?>"/></a>
					<!--<p>
						Etiam nec odio vestibulum est mattis effic iturut magna. Pellent esque sit amet tellus blandit. Etiam nec odio vestibul.
					</p>-->
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="footer-title">COMPANY</div>
				<div class="spl-link">
					<ul>
					<li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
									<li><a href="<?php echo e(url('/faq')); ?>" class="">FAQ</a></li>
									<li><a href="#" >Careers</a></li>
									<li><a href="<?php echo e(url('/customersupport')); ?>" >Customer Support</a></li>
									<!--<li><a href="#">Menu Ideas</a></li>-->
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="footer-title">INFORMATION</div>
					<div class="spl-link">
						<ul>
						<li><a href="<?php echo e(url('/fee')); ?>">Fees & Limits</a></li>
										<li><a href="<?php echo e(url('/terms-condition')); ?>" class="">Terms & Conditions</a></li>
										<li><a href="<?php echo e(url('/aml')); ?>">AML</a></li>
										<li><a href="<?php echo e(url('/privacy')); ?>">Privacy Policy</a></li>
										<li><a href="<?php echo e(url('disclaimer')); ?>">Disclaimer</a></li>
						</ul>
					</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="footer-title">CONTACT</div>
				<div class="contact-main">
					<div class="view-cont">
						<span class="left">
							<i class="fa fa-map-marker"></i> 
						</span>
						<span class="right">XXXX-X, 0000 Xlver Tower, XXXXXX-00, XXXXX - XXXXX</span>
					</div>
					<div class="view-cont">
						<span class="left">
							<i class="fa fa-phone-volume"></i>
						</span>
						<span class="right">0000 - XXXXXXX</span>
					</div>
					<div class="view-cont">
						<span class="left">
							<i class="far fa-envelope-open"></i> 
						</span>
						<span class="right"><a href="mailto:X">support@Xchange.com</a></span>
					</div>
				</div>
			</div>
		</div>       
      </div>
      <!-- /.container -->
	  <input type="hidden" id="parent_coin" value="<?php if(isset($parent_coin)): ?><?php echo e($parent_coin); ?><?php endif; ?>" >
    </footer>

    <div class="darkes-footer">
      <div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<p>Copyright &copy; <span class="logo-yellow">Koinone</span> 2018 All Right Reserved.</p>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="footer-social">
					<ul>
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-medium-m"></i></a></li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('/public/gilt/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/public/gilt/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/public/gilt/js/common.js')); ?>"></script>
    <?php echo $__env->yieldContent('footerjs'); ?>
    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
  </body>

</html>

