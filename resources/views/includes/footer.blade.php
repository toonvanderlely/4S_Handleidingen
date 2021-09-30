
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">


<!-- analytics code -->              
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30506707-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript"> 
 <!-- 
 if (top.location!= self.location) { 
  top.location = self.location.href
 } 
//--> 
</script>
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Over ons</h6>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est laborum deleniti, quae, maxime ratione rerum dolore quas doloremque voluptatibus sint quo magnam saepe, officiis minus laudantium praesentium ipsum voluptates amet?</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Social media</h6>
            <ul class="footer-links">
              <li><a href="#">instagram</a></li>
              <li><a href="#">facebook</a></li>
              <li><a href="#">linkedin</a></li>
              <li><a href="#">pinterest</a></li>
              <li><a href="#">twitter</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">Over ons</a></li>
              <li><a href="#">Contact Ons</a></li>
              <li><a href="#">Home pagina</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">	© {{ __('misc.copyright') }} </p>.
            </p>
          </div>
        </div>
      </div>
</footer>