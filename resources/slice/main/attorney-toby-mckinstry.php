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
          <div class="hex hex-img" style="background-image: url('theme/images/tmp/img-attorney-toby-mckinstry.jpg');">
            <div class="corner-1"></div>
            <div class="corner-2"></div>
          </div>
          <h4>Toby McKinstry</h4>
        </div>
      </div>
      <div class="block-bd">
        <div class="desc">
          <p><strong>Business & Complex Litigation, Energy, Oil & Gas, Personal Injury, Products Liability, Contracts</strong></p>
          <div class="info">
            <a href="tel:4056063353">405.606.3353</a><br/>
            <a href="mailto:tobym@trmglaw.com">tobym@trmglaw.com</a>
          </div>
        </div>
        <div class="text">
          <p>Toby McKinstry is an experienced trial lawyer in a broad range of civil litigation, including contract and business disputes, energy and oil and gas matters, personal injury, product liability and franchise disputes. He represents both plaintiffs and defendants before state and federal courts and routinely appears before the Oklahoma Corporation Commission and state administrative agencies.  Toby advises clients concerning legislative and regulatory matters and has extensive experience in statutory construction and drafting.</p>
          <p>Toby believes in delivering active, efficient representation for his clients, and works to ensure responsiveness to every client, and that each case is continually pushed to conclusion.  Although Toby’s efforts result in successful settlement of many of his cases, he prepares every litigation matter with the assumption that it will be tried to a judge or jury.  Toby has tried numerous cases to conclusion and has a longstanding record of success in trials.</p>
          <h5>Representative Engagements</h5>
          <ul>
            <li>Lead counsel in many jury trials tried to conclusion</li>
            <li>Lead counsel in negotiating resolution of many high stakes litigation matters through mediation and arbitration</li>
            <li>Counsel to one of the nation’s largest gas gathering companies concerning legislative, regulatory and litigation matters</li>
            <li>Lead counsel in many matters involving well failures and personal injuries on well sites</li>
            <li>Lead counsel in many matters involving disputes with landowners</li>
            <li>Lead counsel in many matters alleging pollution on well sites</li>
            <li>Lead counsel in many matters involving disputes over enforceability of terms in oilfield service contracts and master service agreements</li>
            <li>Routinely advises internationally known large heavy equipment manufacturer in all facets of business  </li>
            <li>Heavily involved in negotiation and drafting of amendments to state statutes and regulations concerning pipeline safety and gas gathering</li>
            <li>Heavily involved in numerous rulemakings at Oklahoma Corporation Commission concerning pipeline safety and other issues</li>
            <li>Lead role in successfully settled multi-million dollar litigation over CO2 secondary recovery facility</li>
            <li>Secured millions of dollars in settlements on behalf of individuals who have been catastrophically injured </li>
          </ul>
          <h5>Education</h5>
          <ul>
            <li>B.S. Political Science, Texas Tech University, 1994</li>
            <li>J.D., Oklahoma City University, 1997 Toby is licensed to practice in all Oklahoma state and federal courts</li>
          </ul>
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