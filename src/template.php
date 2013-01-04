<!doctype html>
<html lang="en-US">
	<head>
		<title>Web Makers</title>
		<meta charset="utf-8">
		<meta content="The next BIG resource for web makers in the middle east is coming ..." name="description">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="all" href="src/css/style.css" />
		<link rel="author" href="humans.txt" />
		<script src="src/js/jquery.js"></script>
		<script src="src/js/bootstrap-alert.js"></script>
		<script src="src/js/bootstrap-button.js"></script>
		<script>
		$(document).ready(function() {
			$('form').submit(function () {
				return $(this).find("[type='submit']").button('loading');
			})
		});
		</script>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-37391399-1']);
			_gaq.push(['_setDomainName', 'webmakers.me']);
			_gaq.push(['_setAllowLinker', true]);
			_gaq.push(['_trackPageview']);
			<?php if( $email_inserted ): ?>_gaq.push(["_trackEvent", "Coming-Soon", "email-inserted"]);<?php endif; // End if $email_inserted ?>

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">
					<h1 class="span8">WebMakers.me</h1>
					<p class="span8">The next BIG resource for web makers in the middle east is coming ...</p>
				</div><!--end .row-->
			</header>
			<section>
				<div class="row">
					<div id="form-wrapper" class="span8 padded10 center">
						<h3>Stay in touch</h3>
						<?php if( $email_inserted ): ?>
						<div class="alert alert-success">
							<a class="close" data-dismiss="alert" href="#">&times;</a>
							Thanks for trusting us, We'll keep you in touch.
						</div><!-- end .alert alert-success -->
						<?php endif; // End if $email_inserted ?>
						<p>We're not quite there yet, but we're getting there! Please subscribe to know when we're ready.</p>
						<form action="./" method="post">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input type="email" name="email" required="required" class="span5" placeholder="Enter your email to subscribe" />
								<button name="subscribe" class="btn" type="submit" data-loading-text="Submitting...">Subscribe</button>
							</div>
							<span class="help-block"><small>*Don't worry - we hate spam too and promise that we'll never send you any garbage emails.</small></span>
						</form>
					</div><!-- end #form-wrapper -->
				</div><!-- end .row -->
			</section>
		</div><!-- end .container -->
	</body>
</html><!-- You can find the source code for this project at https://github.com/WebMakers/coming-soon -->