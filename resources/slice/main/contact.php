<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 4); ?>
<?php Utils::set("active_header_sub_nav", -1); ?>
<?php $title = 'CONTACT | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-contact">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-3.jpg" alt=""/>
      <div class="desc">
        <h1>We’re ready and waiting</h1>
      </div>
    </div>
    <div class="block-text pull-center">
      <div class="cols col-one style-a">
        <h2>OUR ADDRESS</h2>
        <address>
          <h3><a href="https://www.google.com/maps/place/Leadership+Square/@35.4693815,-97.5192653,17z/data=!3m1!4b1!4m2!3m1!1s0x87b2172eddb389a5:0x8a7758a0f362ff2e">Tomlinson, Rust, McKinstry & Grable P.C.</a></h3>
          <p><a href="https://www.google.com/maps/place/Leadership+Square/@35.4693815,-97.5192653,17z/data=!3m1!4b1!4m2!3m1!1s0x87b2172eddb389a5:0x8a7758a0f362ff2e">
              Two Leadership Square <br/>
              211 North Robinson Avenue, Suite 450 <br/>
              Oklahoma City, OK 73102
            </a></p>
        </address>
        <p>Phone: <strong><a href="tel:4056063350">405.606.3350</a></strong></p>
      </div>
    </div>
    <section class="block-desc color-b bg-b">
      <h2>Request Information</h2>
    </section>
    <?php include 'actions/form.php'; ?>
    <form class="form form-request-information formValidate" enctype="multipart/form-data" method="post" accept-charset="UTF-8" id="form" action="#form">
      <div class="form-item form-type-text">
        <input type="text" class="form-text required" name="name" placeholder="Name*"/>
      </div>
      <div class="form-item form-type-text">
        <input type="text" class="form-text required" name="email" placeholder="Email*"/>
      </div>
      <div class="form-item form-type-text">
        <input type="text" class="form-text" placeholder="Phone number" name="phone"/>
      </div>
      <div class="form-item form-type-textarea">
        <textarea placeholder="Your Message" class="form-textarea" name="message"></textarea>
        <div class="description">*Required</div>
      </div>
      <div class="form-actions"><input class="form-submit" type="submit" value="Submit" name="submit"></div>
    </form>
    <div class="thank-you">
      <div class="text"><p>Thank you, your submission has been received</p></div>
      <p><a href="#">Go back to the form</a></p>
    </div>
  </div>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>