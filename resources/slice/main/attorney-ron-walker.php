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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-ron-walker.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Ron Walker</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Complex Business Litigation</strong></p>
          <div class="info">
            <a href="tel:4056063370">405.606.3370</a><br/>
            <a href="mailto:ronw@trmglaw.com">ronw@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Since 1979, Ron’s practice has encompassed a wide range of complex litigation that has included toxic torts, products liability, business dissolutions, insurance bad faith, negligence and contract disputes as well as CERCLA cost recovery, ground water pollution, class actions, antitrust and a variety of other subjects.  He was also co-author of Antitrust Law: Indirect Purchaser Standing to Sue in Oklahoma – Major v. Microsoft Corporation which was published in the Oklahoma Law Review.  The article is based on a lawsuit in which Ron represented Microsoft Corporation.</p>
          <p>Ron is licensed in all Oklahoma state and federal courts, the Tenth Circuit Court of Appeals and the United States Supreme Court.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Litigation counsel for consortium of investors in federal court case involving dissolution of $100,000,000.00 Limited Liability Company</li>
            <li>Litigation counsel for Fortune 500 company in  health-related product liability cases</li>
            <li>Class action litigation counsel in state and federal courts involving antitrust, insurance coverage, product liability and other issues</li>
            <li>Litigation counsel in toxic tort litigation involving hazardous materials at Superfund site</li>
            <li>Litigation counsel in numerous bad faith, negligence and insurance coverage cases as well as lawsuits involving securities, fraud and employment issues</li>
            <li>Litigation counsel in many product liability manufacturing and design defect cases</li>
            <li>Litigation counsel for Fortune 500 company in nationwide antitrust price-fixing class action</li>
            <li>Litigation counsel in many jury trials in both state and federal courts</li>
          </ul>
          <h5>Education</h5>
          <p>Phillips University (B.A., Philosophy, 1976, Magna Cum Laude);  University of Oklahoma (J.D. 1979).  In law school, Ron was an Editor of the Oklahoma Law Review and a member of the  Order of the Coif.</p>
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