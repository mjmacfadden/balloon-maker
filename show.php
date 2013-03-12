<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" class="mike">
<head>
<title>Google Earth - Balloon Maker</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39192776-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body class="mike">
	<div id="balloon" class="rounded-corners">
	  <div id="balloon_wrap">
		  <?php
		  /* post.php : this page shows what insert.php has sent */

		  echo(stripslashes($_POST['content']));
		  ?>
	    <img src="images/triangle.png" id="triangle" />
    </div>
	</div>	
</body>
</html>
