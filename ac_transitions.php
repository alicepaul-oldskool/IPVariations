
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Abstract/Concrete Instructions</title>
	<link href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css" type="text/css" rel="stylesheet" />
	<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script>
	$(document).bind("mobileinit", function(){
	    $.extend($.mobile, {
	        metaViewportContent: "width=device-width, height=device-height, minimum-scale=1, maximum-scale=1"
	    });
	});
	$(document).ready(function() {
		$('a').click(function(e) {
		
			var	frompage		= $.mobile.activePage,
				topage			= $($(this).attr('href')),
				transpage		= $('#trans'),
				departureplane	= parseInt( frompage.attr('data-plane') ),
				arrivalplane 	= parseInt( topage.attr('data-plane') ),
				reverse			= false,
				transition		= 'silde',
				n_trans_slides	= Math.abs( departureplane +- arrivalplane ) +- 1;
			
			if (departureplane +- arrivalplane > 0) {
				reverse			= true;
				transition		= 'slide';
			} else if (departureplane +- arrivalplane < 0) {
				reverse			= false;
				transition		= 'slide';
			} else {
				reverse			= false;
				transition		= 'slide';
			}
			
			if (n_trans_slides < 0) {
				alert("can't (or won't) go from self to self");
				$.mobile.silentScroll(-100);	
				return false;
			}
			else if (n_trans_slides > 0) {
				$.mobile.changePage([frompage,transpage],transition,reverse,false);
				return true;
			} else {
				$(this).attr('data-transition',transition);
				if (reverse) {
					$(this).attr('data-direction','reverse');
				}
				return true;
			}
		});

	});
	</script>
	<script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
</head>

<body>
<div title="go for it"></div>
<div data-role="page" id="one" data-theme="a" data-plane="1">

	<div data-role="header">
		<h1>Instructions: Abstractness vs. Concreteness (CLICK ON NEXT ARROW AFTER YOU HAVE READ EACH INSTRUCTION)</h1>
	</div>

	<div data-role="content">	
<a href="#two" class="transition"><img src="assets/next_o.png" width="19" height="19" alt="continue"></a>  <sup> NEXT</sup>		
			<!-- <li><a href="#one">go to one</a></li> -->
			<a href="#two">NEXT</a>
			
	</div>

	<div data-role="footer">
		<h4></h4>
	</div>
</div>

<div data-role="page" id="two" data-theme="a" data-plane="2">

	<div data-role="header">
		<h1>header two</h1>
	</div>

	<div data-role="content">	
		<p>Instructions: Abstractness vs. Concreteness (CLICK ON NEXT ARROW AFTER YOU HAVE READ EACH INSTRUCTION)</p>		
		<ol>
			<!-- <li><a href="#one" data-direction="reverse">go to one</a></li>-->
			<!-- <li><a href="#two">go to two</a></li> -->
			<li><a href="#three">go to three</a></li>
		</ol>
	</div>

	<div data-role="footer">
		<h4>footer two</h4>
	</div>
</div>

<div data-role="page" id="three" data-theme="c" data-plane="3">

	<div data-role="header">
		<h1>header three</h1>
	</div>

	<div data-role="content">	
		<p>content three</p>
		<ol>
			<li><a href="#one" data-direction="reverse">go to one</a></li>
			<li><a href="#two" data-direction="reverse">go to two</a></li>
			<li><a href="#three">go to three</a></li>
		</ol>
	</div>

	<div data-role="footer">
		<h4>footer three</h4>
	</div>
</div>

<div data-role="page" id="trans" data-theme="d">

	<div data-role="header">
		<h1>trans trans trans</h1>
	</div>

	<div data-role="content">	
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div data-role="footer">
		<h4>trans trans trans</h4>
	</div>
</div>

</body>
</html>