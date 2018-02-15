<header id="site-header" class="site-header">
  <div class="site-container">
    <div class="logo"><a href="/"><img src="theme/images/logo-new-a.png" alt=""/></a></div>
    <div class="social-links">
      <ul>
        <li class="social-1"><a href="#"></a></li>
      </ul>
    </div>
    <nav class="nav">
      <a class="btn-nav" href="#"></a>
      <ul class="menu">
        <li class="<?php print Utils::get("active_header_nav") == 0 ? "active" : ""  ?>"><a href="philosophy.php">Philosophy</a></li>
        <li class="expanded <?php print Utils::get("active_header_nav") == 1 ? "active" : ""  ?>">
          <a href="inventions-and-branding.php">Expertise</a>
          <ul class="menu">
            <li class="<?php print Utils::get("active_header_sub_nav") == 0 ? "active" : ""  ?>"><a href="inventions-and-branding.php">Insurance Litigation</a></li>
            <li class="<?php print Utils::get("active_header_sub_nav") == 1 ? "active" : ""  ?>"><a href="litigation-and-product-safety.php">Litigation and Product Safety</a></li>
            <li class="<?php print Utils::get("active_header_sub_nav") == 2 ? "active" : ""  ?>"><a href="business-transactions-disputes.php">Inventions and Branding</a></li>
            <li class="<?php print Utils::get("active_header_sub_nav") == 3 ? "active" : ""  ?>"><a href="employer-defense.php">Business Transactions and Disputes</a></li>
            <li class="<?php print Utils::get("active_header_sub_nav") == 4 ? "active" : ""  ?>"><a href="insurance-litigation.php">Employer Defense</a></li>
          </ul>
        </li>
        <li class="<?php print Utils::get("active_header_nav") == 2 ? "active" : ""  ?>"><a href="attorneys.php">Attorneys</a></li>
        <li class="<?php print Utils::get("active_header_nav") == 3 ? "active" : ""  ?>"><a href="staff.php">Staff</a></li>
        <li class="<?php print Utils::get("active_header_nav") == 4 ? "active" : ""  ?>"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>