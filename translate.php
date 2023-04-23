</main>

<div style="position:sticky;bottom: 23px;position: fixed;z-index: 999;right: 80px;">
   <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate"><img src="img/en-us.png" height="32" width="32" alt="English" /></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="glink nturl notranslate"><img src="img/es-mx.png" height="32" width="32" alt="Spanish" /></a>
</div>

<style>
   #goog-gt-tt {
      display: none !important;
   }

   .goog-te-banner-frame {
      display: none !important;
   }

   .goog-te-menu-value:hover {
      text-decoration: none !important;
   }

   .goog-text-highlight {
      background-color: transparent !important;
      box-shadow: none !important;
   }

   body {
      top: 0 !important;
   }

   #google_translate_element2 {
      display: none !important;
   }
</style>

<div id="google_translate_element2"></div>
<script>
   function googleTranslateElementInit2() {
      new google.translate.TranslateElement({
         pageLanguage: 'en',
         autoDisplay: false
      }, 'google_translate_element2');
   }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script>
   function GTranslateGetCurrentLang() {
      var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
      return keyValue ? keyValue[2].split('/')[2] : null;
   }

   function GTranslateFireEvent(element, event) {
      try {
         if (document.createEventObject) {
            var evt = document.createEventObject();
            element.fireEvent('on' + event, evt)
         } else {
            var evt = document.createEvent('HTMLEvents');
            evt.initEvent(event, true, true);
            element.dispatchEvent(evt)
         }
      } catch (e) {}
   }

   function doGTranslate(lang_pair) {
      if (lang_pair.value) lang_pair = lang_pair.value;
      if (lang_pair == '') return;
      var lang = lang_pair.split('|')[1];
      if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
      var teCombo;
      var sel = document.getElementsByTagName('select');
      for (var i = 0; i < sel.length; i++)
         if (sel[i].className.indexOf('goog-te-combo') != -1) {
            teCombo = sel[i];
            break;
         } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
         setTimeout(function() {
            doGTranslate(lang_pair)
         }, 500)
      } else {
         teCombo.value = lang;
         GTranslateFireEvent(teCombo, 'change');
         GTranslateFireEvent(teCombo, 'change')
      }
   }
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/whatsapp.css">
<div class="container-media">
   <a href="https://wa.me/16155936531" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</div>


<!-- JS here -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/waypoints.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/backToTop.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>