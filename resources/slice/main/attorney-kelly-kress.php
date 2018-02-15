<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 2); ?>
<?php Utils::set("active_header_sub_nav", -1); ?>
<?php $title = 'Attorney | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-attorney">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-5.jpg" alt=""/>
    </div>
    <div class="b-attorney">
      <div class="block-hd">
        <div class="inner">
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-kelly-kress.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Kelly Kress</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Intellectual Property, Business & <br/> Complex Litigation</strong></p>
          <div class="info">
            <a href="tel:4056063360">405.606.3360</a><br/>
            <a href="mailto:kellyw@trmglaw.com">kellyw@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Kelly Kress is a registered Patent attorney. Her practice includes the filing and prosecuting of patent and trademark applications as well as litigating a broad range of civil disputes. Kelly has prosecuted a wide range of patent applications from oil and gas technology to medical equipment. Kelly also has experience working on multiple patent litigation cases as well as multiple personal injury cases where she has represented both plaintiffs and defendants.</p>
          <h5>Bar Admissions</h5>
          <ul>
            <li>Oklahoma, 2011</li>
            <li>Admitted to practice before the Western District of Oklahoma</li>
            <li>United States Patent and Trademark Office, 2012</li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Molecular Biology, Baker University, 2008, cum laude</li>
            <li>J.D.  Oklahoma City University, 2011</li>
          </ul>
          <h5>Other Activities</h5>
          <p>While in law school Kelly received a CALI award for top performance in Intellectual Property. Kelly also participated actively in the Public Interest Law Group and served as a law clerk for the United States District Attorney’s Office for the Western District of Oklahoma. While in college, Kelly played on the university volleyball team and served as team captain for a couple of years. Kelly worked as a sports trainer in the off-season and was picked to serve as a lab assistant for the chemistry and organic chemistry professors during her last three years of college.</p>
        </div>
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
  </div>
  <?php include 'tpl/layout/footer.inc'; ?>
</div>
</body>
</html>