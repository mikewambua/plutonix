<?php
    include('path.php');
    include(ROOT_PATH . '/app/includes/header.php');
    include(ROOT_PATH . '/app/includes/navbar.php');
?>

<!-- ***** Our Services Start ***** -->
<section class="section" id="our-services">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="section-heading">
                  <h2>Our <em>Services</em></h2>
                  <img src="assets/images/line-dec.png" alt="">
                  <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
              </div>
          </div>
      </div>
      <div class="row ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">
        <div class="col-lg-4">
          <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top"><a href='#tabs-1' class="ui-tabs-anchor"><img src="assets/uploads/images/service_one.png" alt="">Website Design and Development</a></li>
            <li class="ui-state-default ui-corner-top"><a href='#tabs-2' class="ui-tabs-anchor"><img src="assets/uploads/images/service_one.png" alt="">Database Management System</a></li>
            <li class="ui-state-default ui-corner-top"><a href='#tabs-3'class="ui-tabs-anchor"><img src="assets/uploads/images/service_one.png" alt="">Digital Content</a></li>
            <li class="ui-state-default ui-corner-top"><a href='#tabs-4' class="ui-tabs-anchor"><img src="assets/uploads/images/service_one.png" alt="">Internet Services</a></li>
            <div class="main-rounded-button"><a href="#">View All Services</a></div>
          </ul>
        </div>
        <div class="col-lg-8">
          <section class='tabs-content'>
            <article id='tabs-1' class="ui-tabs-panel ui-widget-content ui-corner-bottom">
              <img src="assets/uploads/images/website.jpg" alt="Web Development">
              <h4>Website Design and Development</h4>
              <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
              <div class="main-button">
                  <a href="#">View Service</a>
              </div>
            </article>
            <article id='tabs-2' class="ui-tabs-panel ui-widget-content ui-corner-bottom">
              <img src="assets/uploads/images/database.jpg" alt="Database Management">
              <h4>Database Management Systems</h4>
              <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <div class="main-button">
                  <a href="#">View Service</a>
              </div>
            </article>
            <article id='tabs-3' class="ui-tabs-panel ui-widget-content ui-corner-bottom">
              <img src="assets/uploads/images/digital.jpg" alt="Digital Content">
              <h4>Digital Content</h4>
              <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
              <div class="main-button">
                  <a href="k#">View Service</a>
              </div>
            </article>
            <article id='tabs-4' class="ui-tabs-panel ui-widget-content ui-corner-bottom">
              <img src="assets/uploads/images/service.jpg" alt="Internet Services">
              <h4>Internet Services</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
              <div class="main-button">
                  <a href="#">View service</a>
              </div>
            </article>
          </section>
        </div>
      </div>
  </div>
</section>
<!-- ***** Our Services End ***** -->

<?php
    include(ROOT_PATH . '/app/includes/scripts.php');
    include(ROOT_PATH . '/app/includes/footer.php');
?>
