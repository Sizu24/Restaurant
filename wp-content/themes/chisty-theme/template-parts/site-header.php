<div class="site-header">
  <div class="site-header__content">
    <a class="site-header__logo" href="<?= home_url() ?>">
      <i class="fas fa-utensils"></i>
    </a>

    <div class="nav__hamburger js-toggle-nav">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>


  <div class="site-header__nav">
    <nav class="nav">
      <ul class="nav__links">
        <li class="nav__links-item"><a href="<?= home_url() ?>">Home</a></li>
        <li class="nav__links-item"><a href="/food-menu">Menu</a></li>
        <li class="nav__links-item"><a href="">About</a></li>
        <li class="nav__links-item"><a href="/contact-us">Contact</a></li>
      </ul>
    </nav>

    <nav class="nav nav--mobile js-nav-drawer">
      <ul class="nav__links nav__links--mobile">
        <li class="nav__links-item nav__links-item--mobile"><a href="<?= home_url() ?>">Home</a></li>
        <li class="nav__links-item nav__links-item--mobile"><a href="/food-menu">Menu</a></li>
        <li class="nav__links-item nav__links-item--mobile"><a href="">About</a></li>
        <li class="nav__links-item nav__links-item--mobile"><a href="/contact-us">Contact</a></li>
      </ul>
    </nav>
  </div>

</div>