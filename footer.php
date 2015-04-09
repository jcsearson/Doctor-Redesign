	</main>
</div>  <!-- .top-content -->

<footer role="contentinfo">
	<section class="top-footer" role="region">
		<div class="foot-location-info foot-info-block">
			<p>Steven E.  Caplan, MD</p>
			<div class="foot-line-break"></div>
			<p>2411 West Belvedere Avenue</p>
			<p>Suite 508</p>
			<p>Baltimore, MD 21215</p>
		</div>  <!-- .foot-location-info  .foot-info-block -->
		<div class="foot-contact-info foot-info-block">
			<p>Contact Information:</p>
			<div class="foot-line-break"></div>
			<p>Phone: (410) 601-8383</p>
			<p>Fax: (410) 601-9899</p>
			<p>E-mail: office@drstevencaplan.com</p>
		</div>  <!-- .foot-contact-info  .foot-info-block -->
	</section>  <!-- .top-footer -->
	<section class="bottom-footer" role="region">
		<div class="site-sub-links">
			<p><em>Steven E. Caplan, MD</em> |  <a href="/disclaimer">Disclaimer</a> | <a href="/about">About</a> | <a href="/contact">Contact</a> | <a href="/payment">Pay Bills</a> | <a href="/after-hours">After-hours</a> | <a href="/imprint">Imprint Page</a></p>
		</div>  <!-- .site-sub-links -->
	</section>  <!-- .bottom-footer -->
</footer>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global-min.js"></script>

<!-- Typekit Font Request -->
<script>
  (function(d) {
    var config = {
      kitId: 'ajj6lkc',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<?php wp_footer(); ?>

</body>
</html>