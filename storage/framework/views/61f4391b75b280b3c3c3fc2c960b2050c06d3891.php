<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" dir="<?php echo e(Helper::getTextDirection()); ?>">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php if(trim($__env->yieldContent('title'))): ?>
		<title><?php echo $__env->yieldContent('title'); ?></title>
	<?php else: ?> 
		<title><?php echo e(config('app.name')); ?></title>
	<?php endif; ?>
	<meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
	<meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="<?php echo e(asset(Helper::getSiteFavicon())); ?>" type="image/x-icon">
	<?php echo $__env->yieldPushContent('PackageStyle'); ?>
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/normalize-min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/scrollbar-min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontawesome/fontawesome-all.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/themify-icons.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/jquery-ui-min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/linearicons.css')); ?>" rel="stylesheet">
	<?php echo $__env->yieldPushContent('sliderStyle'); ?>
	<link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
	<?php if(Helper::getTextDirection() == 'rtl'): ?>
		<link href="<?php echo e(asset('css/rtl.css')); ?>" rel="stylesheet">
	<?php endif; ?>
	<link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">

	<link href="<?php echo e(asset('css/color.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/maintwo.css')); ?>" rel="stylesheet">
	<?php echo \App\Typo::setSiteStyling(); ?>
    <link href="<?php echo e(asset('css/transitions.css')); ?>" rel="stylesheet">
	<?php echo $__env->yieldPushContent('stylesheets'); ?>
	<script type="text/javascript">
		var APP_URL = <?php echo json_encode(url('/')); ?>

		var readmore_trans = <?php echo json_encode(trans('lang.read_more')); ?>

		var less_trans = <?php echo json_encode(trans('lang.less')); ?>

		var Map_key = <?php echo json_encode(Helper::getGoogleMapApiKey()); ?>

		var APP_DIRECTION = <?php echo json_encode(Helper::getTextDirection()); ?>

	</script>
	<?php if(Auth::user()): ?>
		<script type="text/javascript">
			var USERID = <?php echo json_encode(Auth::user()->id); ?>

			window.Laravel = <?php echo json_encode([
			'csrfToken'=> csrf_token(),
			'user'=> [
				'authenticated' => auth()->check(),
				'id' => auth()->check() ? auth()->user()->id : null,
				'name' => auth()->check() ? auth()->user()->first_name : null,
				'image' => !empty(auth()->user()->profile->avater) ? asset('uploads/users/'.auth()->user()->id .'/'.auth()->user()->profile->avater) : asset('images/user-login.png'),
				'image_name' => !empty(auth()->user()->profile->avater) ? auth()->user()->profile->avater : '',
				]
				]); ?>;
		</script>
	<?php endif; ?>
	<script>
		window.trans = <?php
		$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
		$trans = [];
		foreach ($lang_files as $f) {
			$filename = pathinfo($f)['filename'];
			$trans[$filename] = trans($filename);
		}
		echo json_encode($trans);
		?>;
	</script>
</head>

<body class="wt-login <?php echo e(Helper::getBodyLangClass()); ?> <?php echo e(Helper::getTextDirection()); ?> <?php echo e(empty(Request::segment(1)) ? 'home-wrapper' : ''); ?>">
	<?php echo e(\App::setLocale(env('APP_LANG'))); ?>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<?php
		$general_settings = !empty(App\SiteManagement::getMetaValue('settings')) ? App\SiteManagement::getMetaValue('settings') : array();
		$enable_loader = !empty($general_settings) && !empty($general_settings[0]['enable_loader']) ? $general_settings[0]['enable_loader'] : true;
	?>
	<?php if(!empty($enable_loader) && ($enable_loader === true || $enable_loader === 'true')): ?>
		<div class="preloader-outer">
			<div class="preloader-holder">
				<div class="loader"></div>
			</div>
		</div>
	<?php endif; ?>
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<div class="wt-contentwrapper">
			<?php echo $__env->yieldContent('header'); ?>
			<?php echo $__env->yieldContent('slider'); ?>
			<?php echo $__env->yieldContent('main'); ?>
			<?php echo $__env->yieldContent('footer'); ?>
		</div>
	</div>
	<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>"></script>
	<?php echo $__env->yieldContent('bootstrap_script'); ?>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="<?php echo e(asset('js/vendor/jquery-library.js')); ?>"></script>
	<script src="<?php echo e(asset('js/scrollbar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/particles.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui-min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        jQuery(window).load(function () {
            jQuery(".preloader-outer").delay(500).fadeOut();
            jQuery(".pins").delay(500).fadeOut("slow");
        });
	</script>
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5e0db55e27773e0d832b7e13/1ekjnltcj';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168595512-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-168595512-1');
		</script>

</body>
</html>
