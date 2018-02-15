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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-larry-grable.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <div class="hex-a" style="background-image: url('theme/images/tmp/img-attorney-larry-grable.jpg');"></div>
          <h4>Larry Grable</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Early Stage and Start-up Businesses, Intellectual Property, Business & Complex Litigation, Mergers & Acquisitions</strong></p>
          <div class="info">
            <a href="tel:4056063369">405.606.3369</a><br/>
            <a href="mailto:lawrenceg@trmglaw.com">lawrenceg@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Larry Grable is a registered patent attorney. His practice includes transactional and litigation work in such areas as patents, trademarks, copyrights, trade secret protection, licensing and joint development agreements. He also has considerable expertise in negotiation and documentation of business transactions for various early-stage and more established companies, such as assisting in corporate and commercial finance transactions, preparing documents for early-stage investment rounds, and directly counseling Boards of Directors, management and in-house attorneys on a variety of legal issues.</p>
          <p>Larry has advised clients in protecting and profiting from intellectual property in a wide variety of technology fields including the biotechnology, nanotechnology, underground construction, pharmaceuticals, car audio, manufacturing, communications, micro-brewing, terrorism defense technologies, and weather prediction industries.</p>
          <p>Prior to entering law school, Larry was a computer network administrator for Duke Energy Field Services.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Represented a small hearing aid distributor as plaintiff in copyright infringement lawsuits against national hearing aid distributors</li>
            <li>Represented Phillip Morris USA, Inc. as plaintiff in counterfeiting and trademark infringement actions</li>
            <li>Represented a company specializing in the use of healthcare nanotechnology, as counsel for all aspects of its business development and intellectual property portfolio</li>
            <li>Represented early-stage company that develops devices for detection of disease by measuring the content of certain marker molecules in exhaled breath as counsel for intellectual property and business development</li>
            <li>Represented a venture-stage nanobiomaterial manufacturing company as counsel for all intellectual property and business development</li>
            <li>Represented an international cement manufacturer and supplier as counsel for intellectual property matters, including providing infringement opinions, obtaining patent protection, and advising on industry patents</li>
            <li>Represented an international underground construction corporation as counsel for a full range of intellectual property needs, including obtaining US and foreign patents, analyzing competitor patents, and counseling on product design issues</li>
            <li>Represented a client in a wide range of dealer issues including dealership termination, acquisition of dealerships, set-up and financing of new dealerships</li>
            <li>Represented National Motorsport Association in obtaining a favorable jury verdict</li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Biology, Northeastern State University, 1997 minor in Chemistry</li>
            <li>J.D., The University of Tulsa, 2001 with highest honors</li>
          </ul>
          <p>While attending the University of Tulsa, Larry served as Vice-President of the Student Bar Association and Executive Editor of the Tulsa Law Review. Upon graduation, Larry was honored with membership in the Order of the Curule Chair.</p>
          <h5>Admissions/Memberships</h5>
          <p>Oklahoma County, Oklahoma and American Bar Associations. Licensed in all Oklahoma and Texas state courts, the federal courts in Oklahoma, the United States Patent and Trademark Office, and the United States Court of Appeals for the Federal Circuit.</p>
          <p>Larry was appointed by Oklahoma Governor Brad Henry to serve as a Member of the Oklahoma Science and Technology Council. Larry also serves on the Board of Directors of the Oklahoma Nanotechnology Initiative, as well as the Board of the Technology Council of the Oklahoma State Chamber of Commerce. Larry has been certified as a service provider for I2E Inc. (formerly the Oklahoma Technology Commercialization Center).</p>
          <p>Larry is a former board member of Big Brothers Big Sisters of Greater Oklahoma City, and was an officer for three years in the Lambda Chi Alpha fraternity at Northeastern State University.</p>
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