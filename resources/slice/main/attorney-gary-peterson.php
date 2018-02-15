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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-gary-peterson.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Gary Peterson</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Intellectual Property, Business & <br/> Complex Litigation</strong></p>
          <div class="info">
            <a href="tel:4056063367">405.606.3367</a><br/>
            <a href="mailto:garyp@trmglaw.com">garyp@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Gary Peterson is a registered patent attorney. His practice includes all areas of intellectual property law, with an emphasis on patents. With over 25 years of experience in intellectual property law, he has prosecuted, defended, tried and appealed cases involving all types of intellectual property rights. His extensive appellate practice has included all kinds of civil and criminal cases, with two appearances before the United States Supreme Court.</p>
          <p>Gary has advised individuals and business clients in a wide variety of industries, including biotechnology, pharmaceuticals, manufacturing, contracting, oil and insurance.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented numerous mechanical and chemical companies as counsel for a wide range of patent applications including biotechnology and pharmaceutical inventions</li>
            <li>Represented oil field service firm as plaintiff in patent infringement case against competitors in several states. Jury finding of patent validity and infringement affirmed by Federal Circuit court, with later cases ending in injunctions or license agreements</li>
            <li>Represented sporting goods manufacturer as defense counsel for challenge to validity of manufacturer's patent. Action settled after patent owner victory in Federal Circuit court</li>
            <li>Represented utility contractor as defense counsel for patent infringement claim</li>
            <li>Represented medical equipment manufacturer as plaintiff in trademark infringement case, resulting in competitor's name change</li>
            <li>Represented national copyright licensing organization as plaintiff in numerous infringement actions</li>
            <li>Represented burned and disfigured child as plaintiff in appeal challenging child's exclusion from courtroom during trial of his negligence case against utility</li>
            <li>Represented oil company as defense counsel in appeal challenging multimillion dollar verdict for damage to land of surface owner, resulting in reversal of previous verdict for surface owner and ordering of new trial</li>
            <li>Represented insurance company as counsel in raising and preserving appellate issues during trial of bad faith case by insured parties</li>
            <li>Represented defendants under federal death sentences as defense counsel by appointment of federal appellate court, resulting in overturn of death sentences and resentencing of defendants to life imprisonment</li>
            <li>Represented man charged with first degree murder as defense counsel by appointment of federal district court, resulting in jury acquittal of defendant</li>
            <li>Represented client who was unlawfully ordered to register as a sex offender. Secured a favorable appellate ruling and court injunction requiring client's removal from sex offender registry</li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Chemistry, California Institute of Technology, 1974 with honors</li>
            <li>J.D., University of Colorado, 1977</li>
            <li>Gary was honored with membership in Order of the Coif upon graduation from the University of Colorado.</li>
          </ul>
          <h5>Admissions/memberships</h5>
          <p>Oklahoma Bar Association. Licensed to practice in all Oklahoma state and federal courts, the U.S. Courts of Appeal for the Tenth and Federal Circuits, and the Supreme Court of the United States. Registered to practice before the U.S. Patent & Trademark Office.</p>
          <p>Gary is a member of the American Intellectual Property Law Association, and a past president of the Oklahoma Bar Association's Intellectual Property Law section.</p>
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