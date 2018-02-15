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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-jeff-rust.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Jeff Rust</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Employment Law, Business & <br/> Complex Litigation</strong></p>
          <div class="info">
            <a href="tel:4056063363">405.606.3363</a><br/>
            <a href="mailto:jeffr@trmglaw.com">jeffr@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Jeff Rust is an experienced trial attorney. His practice focuses on employment litigation and providing counsel to employers on a broad range of labor and employment issues, including the Americans With Disabilities Act, the Fair Labor Standards Act, the Family Medical Leave Act, and the Health Insurance Accountability and Portability Act. Jeff regularly represents and trains employers in the areas of personnel manuals, overtime pay and wage policies, employment discrimination, sexual harassment, wrongful discharge, and disability requirements. He also handles general business and commercial litigation matters.</p>
          <p>Jeff has advised large corporate clients, government agencies, and small businesses in a wide range of industries, including insurance, manufacturing, food production and telecommunications.</p>
          <p>Prior to his practice of law, Jeff was manager of operations and human resources for Mercantile Stores Corp. in South Carolina, Tennessee and Georgia for 10 years. Jeff's experience in human resources greatly facilitates his ability to communicate with his clients and understand their needs.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented insurance company as defense counsel in a race discrimination suit tried in Federal court</li>
            <li>Represented long-distance telecommunications carrier as defense counsel in a multi-state class action suit alleging unlawful collection of sales tax</li>
            <li>Represented an equipment manufacturer as defense counsel in an age discrimination suit tried in Federal court</li>
            <li>Represented a pork producer as defense counsel in age discrimination, race discrimination and sexual harassment suits tried in Federal court</li>
            <li>Represented frozen food producer as defense counsel for proposed class action alleging disability discrimination</li>
            <li>Represented an Oklahoma state agency as counsel for the drafting and execution of a Reduction-in-Force Policy in accordance with the Oklahoma Merit Protection Rules. This representation included advising the Governor, Lieutenant Governor, State Auditor and Inspector, Superintendent of Public Instruction, and the President of the Board of Agriculture in connection with the implementation of the Reduction-in-Force Policy</li>
            <li>Represented a whistleblower as defense counsel in a claim involving asbestos exposure</li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Business Administration, Winthrop University, 1981</li>
            <li>J.D., Oklahoma City University, 1995 summa cum laude</li>
          </ul>
          <h5>Admissions/Memberships</h5>
          <p>Oklahoma County, Oklahoma and American Bar Associations. Licensed in all Oklahoma state courts, the federal courts in Oklahoma, and the Tenth Circuit Court of Appeals.</p>
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