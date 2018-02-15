<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 5); ?>
<?php Utils::set("active_header_sub_nav", -1); ?>
<?php $title = 'DISCLAIMER | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-disclaimer">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-4.jpg" alt=""/>
      <div class="desc">
        <h1>DISCLAIMER</h1>
      </div>
    </div>
    <div class="block-text">
      <div class="cols col-one style-a">
        <h2>Legal</h2>
        <p>This website is intended to provide information about Tomlinson, Rust, McKinstry & Grable P.C. only. It is not an advertisement or solicitation for business. No attorney-client relationship is created by visiting this site, nor should any information contained herein be relied upon as legal advice or services to the reader under any circumstances.</p>
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