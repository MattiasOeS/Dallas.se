<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
 # http://www.hitta.se/ViewDetailsPink.aspx?Vkiid=BqFFZdOr7PkPntKhAF%252fgpQ%253d%253d&vad=dallas+sthlm
?>
		<div id="footer">
			<ul id="footernav">
				<li id="footeritem1"><a href="/rss" title="dallas rss feed">dallas rss feed</a></li>
    			<li id="footeritem2">call us</li>
    			<li id="footeritem3"><a href="mailto:info@dallas.se" title="send us a note">send us a note</a></li>
    			<li id="footeritem4" class="trebuchet">
    			<span class="footerDate"><?=date("j")?><span class="smaller"><?=strtoupper(date("S"))?></span> OF <?=strtoupper(date("F"))?></span>
    			<div id="footerIssue" class="length-<?=strlen(get_issuenr())?> lubalin"><?=get_issuenr()?></div><!-- footerIssue -->
    			</li>
			</ul>
		</div><!-- footer -->
        <div id="special-coffee"><a href="/"></a></div>
        <div id="special-flash">
        	<!-- Flash area -->
        </div>
	</div><!-- page -->	
	<script type="text/javascript" src="/wp-content/themes/dallas/js/cufon-yui.js"></script>
	<script type="text/javascript" src="/wp-content/themes/dallas/js/LubalinGraphITCbyBT_500.font.js"></script>
	<script type="text/javascript" src="/wp-content/themes/dallas/js/congress.font.js"></script>
	<script type="text/javascript" src="/wp-content/themes/dallas/js/trebuchet.font.js"></script>
	<!--[if lt IE 7]>
		<script type="text/javascript" src="/wp-content/themes/dallas/js/belated.pngfix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="/wp-content/themes/dallas/js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript" src="/wp-content/themes/dallas/js/dallas.js"></script>
	<script type="text/javascript">Cufon.now();</script>
	<!--<?php echo get_num_queries(); ?>-->
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-11034628-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>