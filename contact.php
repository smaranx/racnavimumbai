<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <title>contact</title>
    <link rel="shortcut icon" href="" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- css-include -->

    <!-- boorstrap -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/bootstrap.min.css"
    />
    <!-- themify-icon.css -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/themify-icons.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="rev-slider/css/navigation.css"
    />
    <!-- menu style -->
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css" />
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- responsive.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
  </head>
  <!-- /end of head -->

  <body>
    <!-- Start of Header 
	============================================= -->
    <?php
     include("nav.php"); 
    ?> 
    <!-- End of Header 
	============================================= -->
    <div class="bg-info contact4 overflow-hiddedn position-relative" style="color: white;">
    <!-- Row  -->
    <div class="row no-gutters">
      <div class="container">
        <div class="col-lg-6 contact-box mb-4 mb-md-0">
        <header class="section-header" style="margin-top: -50px;">
    <h3 class="slide_in_w">Contact Us</h3></header>
            <form class="mt-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="name"
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input
                      class="form-control"
                      type="email"
                      placeholder="email address"
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="subject"
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <textarea
                      class="form-control"
                      rows="3"
                      placeholder="message"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mt-2">
                  <button
                    type="submit"
                    class="btn text-inverse px-3 py-2"
                  >
                    <span> Submit</span>
                  </button>
                  <span class="ml-auto align-self-center"
                    ><i class="icon-phone mr-2"></i></span
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Start of footer section
	============================================= -->
    <?php
     include("footer.php"); 
    ?> 
    <!-- End of footer section
	============================================= -->

    <!-- js -->
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script
      type="text/javascript"
      src="assets/js/jquery.magnific-popup.min.js"
    ></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script
      type="text/javascript"
      src="assets/js/jquery.counterup.min.js"
    ></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
    <script type="text/javascript" src="assets/js/circle-progress.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script
      type="text/javascript"
      src="rev-slider/js/jquery.themepunch.tools.min.js"
    ></script>
    <script
      type="text/javascript"
      src="rev-slider/js/jquery.themepunch.revolution.min.js"
    ></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->

    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.actions.min.js"
    ></script>

    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.layeranimation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.navigation.min.js"
    ></script>
    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.parallax.min.js"
    ></script>
    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.slideanims.min.js"
    ></script>
    <script
      type="text/javascript"
      src="rev-slider/js/revolution.extension.video.min.js"
    ></script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <!-- Google Maps Script  -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
    <script src="assets/js/gmap3.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        /*   - Google Map - with support of gmaps.js 
        --------------------------------------------------------------------*/

        function isMobile() {
          return "ontouchstart" in document.documentElement;
        }

        function init_gmap() {
          if (typeof google == "undefined") return;
          var options = {
            center: [23.7110734, 90.4871938],
            zoom: 10,
            mapTypeControl: true,
            mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            },
            navigationControl: true,
            scrollwheel: false,
            streetViewControl: true,
          };

          if (isMobile()) {
            options.draggable = false;
          }

          $("#googleMaps").gmap3({
            map: {
              options: options,
            },
            marker: {
              latLng: [23.7110734, 90.4871938],
              options: { icon: "assets/img/map.png" },
            },
          });
        }
        init_gmap();
        /*   - Google Map - with support of gmaps.js End 
        --------------------------------------------------------------------*/
      });
    </script>
  </body>
</html>
