<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 1); ?>
<?php Utils::set("active_header_sub_nav", 4); ?>
<?php $title = 'INSURANCE LITIGATION | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-insurance-litigation">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-1.jpg" alt=""/>
      <div class="desc">
        <h1>INSURANCE LITIGATION</h1>
      </div>
    </div>
    <div class="page-icon-wrapper">
      <div class="border">
        <div class="border-1"></div>
        <div class="border-2"></div>
      </div>
      <div class="page-icon">
        <div class="corner-1"></div>
        <div class="corner-2"></div>
      </div>
    </div>
    <div class="cols col-one style-a">
      <p>Results.  That is the focus of our insurance practice.  Our veteran trial lawyers provide high level representatives to both commercial and personal line carriers in the full spectrum of legal representation – bad faith jury trials, declaratory judgement actions, coverage disputes, arbitration and mediation, special investigation unit issues and appeals.  With a track record of trial and appellate success in state and federal courts, we help our clients navigate the never-ending challenges to the insurance business. </p>
    </div>
    <div class="b-tabs-without-hexes">
      <div class="tabs-control">
        <ul>
          <li><a href="#">Coverage</a></li>
          <li><a href="#">Case management</a></li>
          <li><a href="#">Appeals</a></li>
          <li><a href="#">Jury trials</a></li>
          <li><a href="#">Bad faith claims</a></li>
        </ul>
      </div>
      <div class="tabs-content">
        <ul>
          <li>
            <h4>Coverage</h4>
            <div class="cols col-one">
              <p>Questions of duties to indemnify or defend are a fundamental part of this claims business.  Being able to clearly and concisely analyze coverage issues is essential.  Our lawyers have decades of experience in coverage analysis of even the most challenging questions.  Whether it is an impromptu call to run something by us or the need of a formal opinion, we are ready for your call.  </p>
            </div>
          </li>
          <li>
            <h4>Case management</h4>
            <div class="cols col-one">
              <p>Legal disputes can be expensive.  The risks and cost of taking a case to trial must be weighed against the benefits.  We believe in candid and objective assessments of the risks from the perspective of experience.  We look forward to working with you to accurately assess your legal position. </p>
            </div>
          </li>
          <li>
            <h4>Appeals</h4>
            <div class="cols col-one">
              <p>Victories at trial must be preserved on appeal.  Proper presentation to appellate courts of the right issues is essential.  Our lawyers have the talent and insight to concisely present the legal arguments clearly and persuasively.  Even when retained after an unfortunate result, we can review the record to identify the grounds to right the wrong. </p>
            </div>
          </li>
          <li>
            <h4>Jury trials</h4>
            <div class="cols col-one">
              <p>Jury trials present unique risks to insurers.  Bad faith allegations can be inflammatory. Our lawyers have the jury trial experience and skill to confront these allegations and present them in ways to allow jurors to focus on the real issues and not be distracted by window-dressing.  Real court room experience is the key.</p>
            </div>
          </li>
          <li>
            <h4>Bad faith claims</h4>
            <div class="cols col-one">
              <p>Oklahoma law requires insurers to use good faith in handling claims.  Allegations of bad faith raise the risk of punitive damages and bad precedent.  Our team has intensive, broad experience with CGL, auto, homeowners, trucking and maritime claims with national and international carriers.  With a focus on bad faith claims, we stay on top of the ever-changing laws that apply to these cases.  Let us discuss how we can help you.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <section class="block-desc color-a bg-b">
      <h2>Request Information</h2>
    </section>
    <?php include 'actions/form.php'; ?>
    <form class="form form-request-information formValidate" enctype="multipart/form-data" method="post" accept-charset="UTF-8" id="form" action="#form">
      <div class="form-item form-type-text">
        <input type="text" class="form-text required" placeholder="Name*" name="name"/>
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