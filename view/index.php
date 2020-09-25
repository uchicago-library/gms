<?php

require_once('cleaner.php');
$clean = cleaner();

require_once('printer.php');

?>
<html>
  <head>
    <title>The Goodspeed Manuscript Collection</title>
  </head>
  <style>
    body {
      margin: 0;
    }
  </style>
  <body>

  <iframe
  src="<?php print_iiif_iframe_src(); ?>"
  width="100%"
  height="100%"
  allowfullscreen
  frameborder="0"></iframe>

<script type="text/javascript">
// ASYNCHRONOUS GOOGLE ANALYTICS CODE.
// http://code.google.com/apis/analytics/docs/tracking/asyncTracking.html
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-12414285-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type =
'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] ||
document.getElementsByTagName('body')[0]).appendChild(ga);
})();
</script>
