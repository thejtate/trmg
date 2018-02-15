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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-ken-mckinney.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Ken McKinney</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Product Liability, Business & <br/> Complex Litigation, Mediation and Alternative Dispute Resolution</strong></p>
          <div class="info">
            <a href="tel:4056063357">405.606.3357</a><br/>
            <a href="mailto:mckinneyk@trmglaw.com">mckinneyk@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Ken McKinney is an experienced trial lawyer in civil law, focusing in particular on business-related matters, and concentrates on litigation and alternate dispute resolution.</p>
          <p>Ken has advised clients in matters of environmental law, oil and gas, securities and complex business issues, including antitrust, white-collar criminal defense and complex contract disputes. He is also an experienced trial lawyer in personal injury and product litigation.</p>
          <p>Ken has been recognized by Chamber's USA--America's Leading Lawyers and Woodward/White's The Best Lawyers in America.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented nationwide PRP group as defense counsel in the only Superfund injunctive ever tried by the United States to impose an EPA remedy</li>
            <li>Represented highway contractor as defense counsel in criminal antitrust action by the Department of Justice</li>
            <li>Represented public insurance group as defense counsel in multi-state securities actions and before insurance department for change of control</li>
            <li>Represented public retail corporation Board of Directors in internal investigation of wrongdoing by senior executives</li>
            <li>Represented state higher-education regents as defense counsel in class action alleging reverse discrimination in award of test-based scholarships</li>
            <li>Represented AT&T as defense counsel in nationwide class action tax litigation</li>
            <li>Represented international oil and gas company as defense counsel for alleged pollution of municipal water supply by secondary recovery methods in a large field</li>
            <li>Represented family of the pilot in the Payne Stewart aviation crash as plaintiff in wrongful death claims against airplane and parts manufacturers</li>
            <li>Represented major city as plaintiff for contamination of its water supply</li>
          </ul>
          <h5>Education</h5>
          <p>B.S. Geology, University of Oklahoma, 1959 LL.B., University of Oklahoma, 1962</p>
          <h5>Admissions/Memberships</h5>
          <p>Oklahoma County, Oklahoma and American Bar Associations. Licensed in all Oklahoma state courts, the federal courts in Oklahoma, the Southern District of Texas, the Seventh Circuit Court of Appeals, the Eighth Circuit Court of Appeals, the Tenth Circuit Court of Appeals, the United States Tax Court and the United States Supreme Court.</p>
          <p>Ken is a Fellow of the American College of Trial Lawyers and belongs to the Federation of Insurance and Corporate Counsel, and the American Inns of Court. He is a Master Emeritus of the Bench, William J. Holloway, Jr. American Inn of Court. Ken has been a member of the Board of Governors of the Oklahoma Bar Association, vice-chairman of its Continuing Legal Education Commission, chairman of its Bench and Bar Committee, and member of the Civil Code Procedure Committee, which helped draft the Oklahoma Evidence Code. He has also been chairman of the Medical-Legal Committee of the Oklahoma County Bar Association. Ken has served as an arbitrator and mediator with the American Arbitration Association, the Western District of Oklahoma and private non-administered arbitrations and mediations.</p>
          <p>Ken is a former Justice of the Oklahoma Temporary Court of Appeals, and was a Captain in the Judge Advocate General Corps of the United States Army. He is also a director of the United Way of Oklahoma City.</p>
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