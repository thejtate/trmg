<?php include 'tpl/utils.inc'; ?>
<?php Utils::set("active_header_nav", 1); ?>
<?php Utils::set("active_header_sub_nav", 0); ?>
<?php $title = 'INVENTIONS & BRANDING | TRMG'; ?>
<?php include 'tpl/includes/head.inc'; ?>
<body class="page page-inventions-and-branding">
<div class="outer-wrapper">
  <?php include 'tpl/layout/header.inc'; ?>
  <div class="content-wrapper site-container">
    <div class="img-top full-block">
      <img src="theme/images/tmp/img-top-1.jpg" alt=""/>
      <div class="desc">
        <h1>INVENTIONS & BRANDING</h1>
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
      <p>Nerds rule the world.  TRMG has the right nerds to protect your invention or brand.  Whether you need to discuss a semiconductor or a wheelbarrow, software or mining equipment, our experience can help you.  We’re equipped to deal with protecting your brand names through trademark registration or litigation.  And if filing a patent or keeping a trade secret is the more effective form of protection, we’ll let you know.</p>
      <p>Our attorneys have degrees in chemical engineering, mechanical engineering, and biology, and real-world patent experience with software, semiconductors, consumer products and cremation.  And like all our attorneys, our patent attorneys are litigators and will advise you to help your patent, trademark, or copyright hold up in court.  So come in and talk to our nerds about Star Wars and the latest gadgets - or your new wheelbarrow or shovel - and we’ll help you protect your intellectual property.</p>
    </div>
    <div class="b-tabs-without-hexes">
      <div class="tabs-control">
        <ul>
          <li><a href="#">Internet</a></li>
          <li><a href="#">Litigation</a></li>
          <li><a href="#">Software</a></li>
          <li><a href="#">Creativity</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">Trade Secrets and NDA<span>s</span></a></li>
          <li><a href="#">Inventions</a></li>
        </ul>
      </div>
      <div class="tabs-content">
        <ul>
          <li>
            <h4>Internet</h4>
            <div class="cols col-one">
              <p>Policing the Internet is a challenge.  The anonymity associated with the Internet often gives others the boldness to steal your work and defame you or your brand.   Fortunately, regulations exist to help you remove pages which are abusive or infringing.  At the same time, efforts to stop Internet abuse can sometimes give rise to the “Streisand Effect”, meaning that the violation that has hurt you will become more harmful due to the effect of trying to remove it.  We can advise you regarding Digital Millennium Copyright Act takedown requests, domain name disputes, and lawsuits arising out of Internet issues.</p>
            </div>
          </li>
          <li>
            <h4>Litigation</h4>
            <div class="cols col-one">
              <p>Any patent, copyright, trademark, contract or license is only as good as your ability to protect it in court.  Unlike many firms with an emphasis in intellectual property, all of our intellectual property attorneys are trial lawyers and will consider the likelihood and complexities of litigation from the very beginning. Additionally, if the time comes to protect your invention or brand in court, our attorneys will help you evaluate the benefit of doing so, and will advocate for you in state or federal court.</p>
            </div>
          </li>
          <li>
            <h4>software</h4>
            <div class="cols col-one">
              <p>One common place for copyright, patent and trade secret to intersect is in the development and distribution of software.  Software is at once creative, useful, and all-too susceptible to copies and plagiarism.  Our attorneys have experience with protecting software through end-user license agreements, non-disclosure agreements, and, when allowed by law, the patent process.</p>
            </div>
          </li>
          <li>
            <h4>Creativity</h4>
            <div class="cols col-one">
              <p>Our community’s musicians, filmmakers, authors and artists add vibrancy to our community.  The creativity associated with artistic works has a value which is difficult to quantify.  Artists can and should control how their works are used – it is the artist’s decision whether or not to allow his or her work to be used by others.  Our attorneys can help you navigate the copyright process.  The copyright enforcement process is often much more complicated than registration, and whether you are an artist dealing with an unauthorized use or an organization wanting to use the works of another under fair use or license, we can help you with the process.  </p>
            </div>
          </li>
          <li>
            <h4>Branding</h4>
            <div class="cols col-one">
              <p>Every brand tells a customer what to expect about a product or service.  A distinct name, associated by the public with quality goods or services, must be protected.  Unfortunately, when a name is confusingly similar to others, or when your name is diluted by others, you lose the value associated with your brand.  Our attorneys can help you register trademarks associated with your brand, and can help you deal with others who are confusing your customers by using similar marks, either through the trademark office or through litigation.</p>
            </div>
          </li>
          <li>
            <h4>Trade Secrets and NDA<span>s</span></h4>
            <div class="cols col-one">
              <p>Whether or not your technical expertise can be protected by patents, there are times when secrecy is the best policy.  Some of the most valuable assets in the world are “trade secrets” – technical know-how or business information that makes a business tick but that competitors cannot figure out.  Issues involving competitors, investors, customers and employees make keeping these secrets very difficult.  Whether you need an action plan to provide maximum security to your secrets, or a series of non-disclosure agreements to keep others from disclosing your important information, we can help you navigate these issues.</p>
            </div>
          </li>
          <li>
            <h4>inventions</h4>
            <div class="cols col-one">
              <p>We’ve all heard the story – an ordinary person, just like you, came up with a product which made that person millions of dollars.  While these success stories do exist, in truth, good ideas often get copied.  The patent process is often long and complicated, but it provides you or your company with the best way to force competitors to go through you if they want to make, use, or sell your invention.  Our patent attorneys will help you navigate this process to determine whether or not a provisional patent application, design patent application, or non-provisional utility filing is right for you.  We’ll also help you navigate through prior inventions to determine the likelihood of getting value out of your patent filing.</p>
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