<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 1); ?>
<?php Utils::set("active_header_sub_nav", 3); ?>
<?php $title = 'EMPLOYER DEFENSE | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-employer-defense">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-1.jpg" alt=""/>
      <div class="desc">
        <h1>EMPLOYER DEFENSE</h1>
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
      <p>Employers face unique challenges in today’s world. The realities of the economy, high-profile lawsuits, and other factors often combine to make businesses a target of legal action in federal and state courts on behalf of current and former employees. These actions may also require representation before administrative boards.  We also act to mitigate your risk of litigation by offering our clients advice and counsel on a broad range of employment, personnel and human resources-related compliance issues. Employers face a minefield of litigation and regulation – let our attorneys sweep the field and plot a path to successful employee management.</p>
    </div>
    <div class="b-tabs-without-hexes">
      <div class="tabs-control">
        <ul>
          <li><a href="#">Wrongful Termination</a></li>
          <li><a href="#">Employment Contracts</a></li>
          <li><a href="#">Navigating Compliance Issues</a></li>
          <li><a href="#">Employment Discrimination</a></li>
        </ul>
      </div>
      <div class="tabs-content">
        <ul>
          <li>
            <h4>Wrongful Termination</h4>
            <div class="cols col-one">
              <p>Nobody likes terminating an employee. It’s always a source of stress and bad feelings for all concerned, particularly when circumstances make it unavoidable. When it becomes necessary to end a worker’s employment, however, you need to make sure you’re protected from the threat of a wrongful termination claim in court. We defend employers against wrongful termination claims, in which a plaintiff alleges that his or her termination was in violation of federal and state law.  When the unfortunate need to terminate a worker’s employment arises, let us help you make sure that the process is completed quickly, legally, and with the least possible risk to your business.</p>
            </div>
          </li>
          <li>
            <h4>Employment Contracts</h4>
            <div class="cols col-one">
              <p>Employment contracts and employee handbooks often are the first items examined when employment issues arise.  Our lawyers can examine these documents for issues from cause for termination to trade secrets and ownership of knowhow.  You can count on us to provide you with the sharpest and most up-to-date legal advice available in all areas of contract law and develop employee documents to avoid pitfalls. </p>
            </div>
          </li>
          <li>
            <h4>Navigating Compliance Issues</h4>
            <div class="cols col-one">
              <p>State and federal law place a number of restrictions on how employers can make decisions concerning hiring, firing, and compensation of employees. Without a clear and in-depth understanding of these statutes, you could inadvertently put your business at risk of litigation.  Our attorneys will help familiarize you with state and federal regulations that apply to the relationship between your company and its employees.  By maintaining compliance on the front end, our attorneys will help you to minimize your exposure for employee liability.</p>
            </div>
          </li>
          <li>
            <h4>Employment Discrimination</h4>
            <div class="cols col-one">
              <p>Discrimination and harassment claims by employees are an unfortunate reality in the modern world. Defending your firm in a federal discrimination and harassment case can be a lengthy process – and an expensive one.  Plaintiffs who are successful at trial are usually entitled to recover attorneys’ fees, and may be entitled to actual and liquidated damages or punitive damages. Although punitive damages may be capped based on the number of workers employed by the defendant, the cost of losing an employment discrimination or harassment case can destroy your business.  When a discrimination or harassment claim is alleged, we will work with you to resolve those claims in a way which allows you to minimize your damages and protect your business.</p>
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