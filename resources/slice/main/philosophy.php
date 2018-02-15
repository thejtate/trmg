<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 0); ?>
<?php Utils::set("active_header_sub_nav", -1); ?>
<?php $title = 'CONTACT | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-philosophy">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-4.jpg" alt=""/>
      <div class="desc">
        <h1>PHILOSOPHY</h1>
      </div>
    </div>
    <div class="block-text style-a">
      <div class="cols col-one style-a">
        <h2>ABOUT US</h2>
        <p>Based in Oklahoma City, Tomlinson, Rust, McKinstry & Grable offers clients the strength and expertise of a large law firm while remaining flexible, agile and cost-conscious. We work with individuals, start-up companies, and major corporations to enforce their rights and protect their business interests.</p>
        <p>Founded in 2005 by a group from one of Oklahoma’s largest and most prestigious law firms, Tomlinson, Rust, McKinstry & Grable offers clients a stellar team of experienced trial attorneys with an in-depth knowledge of industries ranging from oil and gas to nanotechnology. Our litigation attorneys represent clients in state and federal court with the commitment to achieving favorable outcomes while being mindful of clients’ budget restrictions.</p>
        <p>Whether you need counsel related to intellectual property, complex and general litigation, employment law or product liability issues, count on the legal experts at Tomlinson, Rust, McKinstry & Grable to reduce your exposure to risk and present a formidable defense in business disputes.</p>
      </div>
    </div>
    <div class="block-text">
      <div class="cols col-one style-a">
        <h2>OUR PHILOSOPHY</h2>
        <p class="pull-center">Personalized, Efficient Service</p>
        <p>Tomlinson, Rust, McKinstry & Grable delivers highly-efficient, personalized representation — the benefits of small firm responsiveness and service combined with large law firm experience.</p>
        <p>We develop strong personal partnerships with every client: our clients work directly with the lawyer they hire throughout our relationship. We represent individuals, as well as small and large businesses.</p>
        <p>We identify a winning strategy with every client and focus on the most effective means of achieving their goals. We pursue those goals relentlessly, becoming nearly as expert in the subject matter as our clients.
          <br/>
          Our focused, efficient process and extensive legal and trial experience get results.</p>
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