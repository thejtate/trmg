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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-jerry-noblin.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Jerry Noblin</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Business Litigation Products Liability</strong></p>
          <div class="info">
            <a href="tel:4056063359">405.606.3359</a><br/>
            <a href="mailto:jerryn@trmglaw.com">jerryn@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Jerry’s practice encompasses many areas of complex civil litigation including contract and business disputes, products liability, insurance law, employment law, maritime law, plaintiff’s personal injury, and appellate work.  Jerry also is able to advise clients regarding setting up and maintaining gun trusts under the National Firearms Act.  Prior to entering private practice in 2006, Jerry maintained a successful corporate career with a global business and residential telecommunications company.</p>
          <p>Jerry also gained invaluable legal insight and experience at the trial court level as a federal judicial clerk for the Honorable Robin J. Cauthron, Chief Judge, United States District Court for the Western District of Oklahoma.  Today, Jerry’s civil litigation practice combines his legal experience with practical business skill sets learned in his previous corporate career.</p>
          <h5>Education</h5>
          <ul>
            <li>J.D., 2004 (Magna Cum Laude) - Oklahoma City University School of Law</li>
            <li>Oklahoma City University Law Review, Staff Member</li>
            <li>Philip C. Jessup International Law Moot Court Oralist and Brief Writer, 2002-2004</li>
            <li>Nine CALI Academic Achievement Awards (Legal Analysis, Legal Research and Writing I and II, Contracts I, Property II, Constitutional Law I, Criminal Procedure II, Introduction to Legal Practice, and Wills and Estates II)</li>
            <li>Faculty Honor Roll every semester</li>
            <li>Recipient of the Judge Dwain Box award for outstanding appellate advocacy</li>
            <li>Recipient of the Outstanding Graduate award for 2004</li>
            <li>Merit Scholar</li>
            <li>National Order of Barristers</li>
            <li>Phi Delta Phi International Legal Honors Fraternity</li>
            <li>Phi Kappa Phi National Honors Society</li>
            <li>Oklahoma City University School of Law Student Ambassador </li>
            <li>Studied international law at University of Innsbruck, Innsbruck, Austria, including Comparative Constitutional Law taught by United States Supreme Court Justice Antonin Scalia</li>
            <li>M.B.A., 1998 – Middle Tennessee State University</li>
            <li>B.B.S., (Finance), 1993 – Freed-Hardeman University</li>
            <li>B.S., (Theology), 1993 – Freed-Hardeman University</li>
          </ul>
          <h5>Professional Activities</h5>
          <p>Licensed to practice in the United States Supreme Court, the 10th Circuit Court of Appeals, the Western District of Oklahoma, the Northern District of Oklahoma and all Oklahoma state courts</p>
          <p>Member, Oklahoma and American Bar Associations</p>
          <h5>Other Activities</h5>
          <p>Jerry serves on the Board of Directors for the Safari Club International, Oklahoma Station Chapter, and works to promote wildlife conservation, humanitarian services and the freedom to engage in hunting and shooting sports activities.</p>
          <p>Jerry also enjoys outdoor activities of any kind, including hunting, scuba diving and competitive shooting sports, such as Cowboy Action Shooting and Sporting Clays.</p>
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