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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-ross-chaffin.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Ross Chaffin</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Intellectual Property, Business & <br/> Complex Litigation, Aviation</strong></p>
          <div class="info">
            <a href="tel:4056063364">405.606.3364</a><br/>
            <a href="mailto:rossc@trmglaw.com">rossc@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Ross Chaffin is a registered patent attorney. Ross's areas of practice include intellectual property, including the filing and prosecution of patent and trademark applications, developing a company's intellectual property strategy, business transactions and both I.P. and general litigation.  </p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented a oil-field services start-up company in the successful settlement of a trade secret
              misappropriation claim</li>
            <li>Represented multiple chain-of-custody software companies in the development of their strategic intellectual
              property portfolios</li>
            <li>Successfully prosecuted patent applications for individuals and companies ranging from micro-entities to
              multi-million dollar corporations</li>
            <li>Represented a venture-stage nanobiomaterial manufacturing company as counsel for all intellectual property
              and business development</li>
            <li>Represented companies in all phases of trademark and copyright disputes</li>
            <li>Drafted patent applications for technology including underground boring, software, semiconductors, oilfield
              equipment, oilfield chemicals, and consumer products</li>
            <li>Acquired copyrights and trademarks for a variety of clients</li>
            <li>Education</li>
            <li>B.S. Chemical Engineering, University of Oklahoma, 2003 summa cum laude</li>
            <li>J.D., University of Oklahoma, 2006 with distinction</li>
            <li>While attending the University of Oklahoma, Ross was published in the Oklahoma Law Review and was the
              editor-in-chief of the Mineral Law Newsletter for the Oklahoma Bar Association</li>
          </ul>
          <h5>Admissions/memberships</h5>
          <p>Ross is a member of the Oklahoma County, Oklahoma and American Bar Associations. He is licensed to practice in all Oklahoma state courts, Federal Courts for the Eastern and Western Districts of Oklahoma and the Eastern District of Wisconsin, and the United States Patent and Trademark Office.</p>
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