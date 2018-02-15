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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-george-davis.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>George Davis</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Complex Business Litigation</strong></p>
          <div class="info">
            <a href="tel:4056063365">405.606.3365</a>
          </div>
        </div>
        <div class="text">
          <p>George has been a trial and appellate attorney since his graduation from the University of Oklahoma in 1971.  His primary areas of practice include insurance defense and bad faith, products liability defense, architect/engineering malpractice and corporate negligence.  He has lectured dozens of times for the Oklahoma Bar Association on bad faith insurance practices including property claims, uninsured motorist and health coverage as well as general negligence defense.  Mr. Davis is AV Rated, a member of Super Lawyers and the Oklahoma and American Bar Associations.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represents major insurance companies in disputes over bad faith claims handling.</li>
            <li>Represents numerous clients, including hospitals, major state universities, business owners and engineering firms regarding construction contract disputes and engineering malpractice.</li>
            <li>Represents an international gas pipeline company to recover fraudulent overcharges by vendors on multiple projects.</li>
            <li>Represents product manufacturers regarding alleged defects causing bodily injury and property loss.</li>
            <li>Represents severely sick or injured individuals involved in accidents and insurance claims.</li>
          </ul>
          <h5>Education</h5>
          <p>Oklahoma State University (B.A., Political Science, 1966); University of Oklahoma (J.D. 1971). Member of the Order of the Coif.</p>
          <h5>Admissions/Membership</h5>
          <p>AV Rated. Oklahoma and American Bar Associations. Licensed in all Oklahoma state courts, the federal courts in Oklahoma, the Tenth Circuit Court of Appeals and the US Supreme Court. Davis was appointed to serve on the temporary lawyer-staffed panel of the Court of Appeals by order of the Oklahoma Supreme Court. In addition to his OBA presentations on insurance law, Davis has was appointed by the Oklahoma Supreme Court as a member of the Oklahoma Pleading Code Committee and the Oklahoma Uniform Jury Instruction Committee.</p>
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