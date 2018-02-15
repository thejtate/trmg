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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-robert-tomlinson.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Robert Tomlinson</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Intellectual Property, Product Liability, Business & Complex Litigation, Aviation</strong></p>
          <div class="info">
            <a href="tel:4056063351">405.606.3351</a><br/>
            <a href="mailto:bobt@trmglaw.com">bobt@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Bob is an experienced trial attorney. His litigation practice includes product liability, personal injury, antitrust, environmental law, oil well failures, corporate takeovers, patent, trademark and copyright infringement, trade secret and restrictive employment agreements, and complex business litigation. Bob has considerable expertise in domestic and international manufacturer and distributor disputes, and has extensive experience in representing national self-insured clients in a wide range of product liability matters. He has completed more than 70 jury trials.</p>
          <p>Prior to law school, Bob was a mechanical engineer for Sandia Corporation and later, the Charles Machine Works, Inc (manufacturers of Ditch Witch equipment) for 5 years while he attended law school at night. Bob believes strongly in working closely with clients and providing cost-effective results.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented nationwide Potentially Responsible Parties (PRPs) as defense counsel in selection of a remedy for clean up of the Hardage site in Oklahoma, the only Superfund case to be tried by the EPA. The remedy proposed by the PRPs, affirmed on appeal, was selected at a cost savings to clients of over $100 million</li>
            <li>Represented Phillip Morris as lead defense counsel and liaison counsel for all defendants in the action brought by the State of Oklahoma to recover Medicaid and Medicare costs allegedly attributable to smoking-related illnesses</li>
            <li>Represented Phillip Morris in Oklahoma as plaintiff in numerous counterfeit cases for trademark infringement involving the illegal sale of tobacco products intended for the Mexico market</li>
            <li>Represented national manufacturer of food processing equipment as defense counsel in product liability suits</li>
            <li>Represented construction equipment manufacturer as plaintiff in numerous patent infringement litigation cases involving mechanical and electronic technology</li>
            <li>Represented national accounting firm as defense counsel for actions alleging professional negligence</li>
            <li>Represented national manufacturer of building equipment as defense counsel in allegations of patent infringement</li>
            <li>Represented national manufacturer of underground construction equipment as defense counsel in allegations of personal injuries caused by product defects</li>
            <li>Represented manufacturer of toasters and coffee makers as defense counsel in allegations of personal injuries and/or death caused by product defects</li>
            <li>Represented national manufacturer of power saws as defense counsel in allegations of personal injury caused by product defects</li>
            <li>Represented insurance company as counsel for successful defense of hostile takeover attempt</li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Mechanical Engineering, Oklahoma State University, 1964</li>
            <li>M.S. Mechanical Engineering, Oklahoma State University, 1969</li>
            <li>J.D., Oklahoma City University, 1975</li>
          </ul>
          <h5>Admissions/Memberships</h5>
          <p>Oklahoma County, Oklahoma and American Bar Associations. Admitted to practice in all Oklahoma state courts, the federal courts in Oklahoma, the U.S. District Court for the Eastern District of Wisconsin, the Tenth Circuit Court of Appeals, the Federal Circuit Court of Appeals, and the United States Supreme Court.</p>
          <p>Bob has been admitted pro hac vice in the U.S. District Courts of the Central District of Iowa, the Western District of Washington, and the District of Montana, as well as the Superior Court of the State of California, County of San Diego, North, and the Supreme Court of the State of New York, County of Suffolk.</p>
          <p>In 1975, Bob founded the House Counsel Section of the Oklahoma Bar Association. Bob is a Fellow of the Litigation Counsel of America. He also has been selected as an Oklahoma "Super Lawyer."</p>
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