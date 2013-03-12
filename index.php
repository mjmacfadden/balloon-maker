<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" class="mike">
<head>
<title>Google Earth - Balloon Maker</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<!-- VideoBox -->
<script type="text/javascript" src="video/js/mootools.js"></script>
<script type="text/javascript" src="video/js/swfobject.js"></script>
<script type="text/javascript" src="video/js/videobox.js"></script>
<link rel="stylesheet" href="video/css/videobox.css" type="text/css" media="screen" />

<!--TinyMCE-->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,preview,youtube", 
                
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,image,|,code",
        theme_advanced_buttons3 : "spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,youtube",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : false
});
</script>

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

<!-- OF COURSE YOU NEED TO ADAPT ACTION TO WHAT PAGE YOU WANT TO LOAD WHEN HITTING "SAVE" -->

<?php include("sidebar.php"); ?>
  
  <a href="http://github.com/mjmacfadden"><img src="images/github.png" id="github" /></a>

  <div id="editor">

    <form method="post" action="show.php" target="_blank">

            <p>     
                    <textarea name="content" cols="60" rows="30">This is some content that will be editable with TinyMCE.</textarea>
                    <input type="submit" value="preview" id="preview" />
            </p>
            
    </form>

  </div>

</body>
</html>
