<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 1); ?>
<?php Utils::set("active_header_sub_nav", 1); ?>
<?php $title = 'LITIGATION & PRODUCT SAFETY | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-litigation-and-product-safety">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-1.jpg" alt=""/>
      <div class="desc">
        <h1>LITIGATION & PRODUCT SAFETY</h1>
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
      <p>No one wants injuries to happen, but they are often an inevitable part of today’s world.  Injuries can occur because of a defect in the product – or because the injured party was misusing that product.  TRMG has decades of experience representing both injured parties and product manufacturers in products liability and personal injury litigation.</p>
      <p>By becoming proficient at both bringing and defending lawsuits, TRMG’s lawyers are better equipped to handle fact witness depositions, expert testimony, document review, and trial.  Litigation is often expensive, and sometimes unnecessarily so.  By focusing on the key issues that will determine the outcome of your case, we can efficiently and effectively take a case from initial evaluation to trial.</p>
    </div>
    <div class="b-tabs-without-hexes">
      <div class="tabs-control">
        <ul>
          <li><a href="#">Trial Presentation</a></li>
          <li><a href="#">Case management</a></li>
          <li><a href="#">Aviation</a></li>
          <li><a href="#">Oil and gas</a></li>
          <li><a href="#">Personal injury or wrongful death</a></li>
          <li><a href="#">Products</a></li>
        </ul>
      </div>
      <div class="tabs-content">
        <ul>
          <li>
            <h4>Trial Presentation</h4>
            <div class="cols col-one">
              <p>Where trial is necessary, our team will utilize techniques and technology to present the evidence and witnesses in a clear, concise way to help judges and juries understand the theory of your case.  Audiences in the courtroom are changing – and with them, the expectations of how evidence should be presented.  Our litigators have experience with trial presentation technology, and a background solidified by real-world courtroom experience and high-end training from the National Institute for Trial Advocacy.  </p>
            </div>
          </li>
          <li>
            <h4>case management</h4>
            <div class="cols col-one">
              <p>All disputes have the potential to be expensive.  The risk and cost of taking a case to trial must be weighed against its benefits.  We discuss these issues at our initial assessment of your case and map out a legal strategy accordingly.  Every issue from discovery and expert witnesses, to budgets and resolution strategies is examined at these early stages.  Our approach to case planning recognizes the importance of frequent communication and coordination of resources between our legal team and your in-house team.  Further, risk assessment techniques will be used at multiple points to illustrate the costs and benefits of different approaches to resolving the dispute.</p>
            </div>
          </li>
          <li>
            <h4>aviation</h4>
            <div class="cols col-one">
              <p>Aircraft accidents are unique in that the crash investigation is highly regulated by the federal government, and the root cause is usually difficult to ascertain and requires significant investment. Crash site and flight path reconstruction, component part testing, and attention to multiple flight manual updates and safety notifications are critical for defending and prosecuting these cases. Our firm has aided injured passengers and component part manufacturers in complex helicopter cases, and can act directly and as local counsel to assist you.</p>
            </div>
          </li>
          <li>
            <h4>Oil and gas</h4>
            <div class="cols col-one">
              <p>Oklahoma is at the heart of oil country and oilfield accidents are not uncommon. While some of these injuries and deaths are truly accidental, many more are the result of preventable actions, such as carelessness, improper use of equipment, or defective products. When these preventable accidents occur, the victims are often persuaded to seek compensation from whoever has the deepest pockets — regardless of whether their target is truly liable.</p>
              <p>Our team includes experienced litigators – and litigators with engineering degrees – to help you navigate the issues in the case.  We will help oilfield defendants minimize their portion of their exposure, and help parties injured through no fault of their own maximize their recovery.  </p>
            </div>
          </li>
          <li>
            <h4>personal injury or wrongful death</h4>
            <div class="cols col-one">
              <p>Often, cases are brought by a party who is injured, or by the families of those who are deceased.  Oklahoma law provides for damage limitations in some of these cases.  Extralegal issues should be considered alongside a frank analysis of the case’s value.  Whether you’re defending a case, considering bringing a case, or needing to refer a case to a firm familiar with complex injury litigation, we can provide an evaluation and immediate attention to those issues which will become important to the outcome.</p>
            </div>
          </li>
          <li>
            <h4>products</h4>
            <div class="cols col-one">
              <p>Product safety is a complex area and the subject of ever-changing legal standards.  Product manufactures face the risk of claims that their products caused physical injury or injury to property. In order to recover, a plaintiff must prove that a product was defective in design, manufacture, or labeling at the time it left a defendant’s control. The product may not be more dangerous than contemplated by an ordinary user.</p>
              <p>Our team has experience defending and pursuing these cases in a broad range of industries, from heavy manufacturing, to the oilfield, to aviation.  These cases often turn on the testimony of expert witnesses, and our experience preparing to elicit and refute expert witness testimony will help get the best possible outcome for your case.  Our attorneys have legal and engineering expertise that will benefit the preparation and execution of a successful strategy.  </p>
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