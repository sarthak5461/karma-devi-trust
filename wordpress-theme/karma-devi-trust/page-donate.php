<?php /* Auto-converted from donate.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate & Get Involved | Karma Devi Trust</title>
  <meta name="description" content="Make a difference today. Donate to Karma Devi Trust or volunteer to support education, healthcare, and community development in rural India.">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/css/style.css'); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0">
  <?php wp_head(); ?>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar" id="navbar">
    <div class="navbar__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar__brand">
        <span class="navbar__brand-icon"><span class="material-symbols-rounded">favorite</span></span>
        Karma Devi Trust
      </a>
      <div class="navbar__links">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar__link">Home</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="navbar__link">About</a>
        <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="navbar__link">Programs</a>
        <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="navbar__link navbar__link--active">Donate</a>
        <a href="<?php echo esc_url(home_url('/register/')); ?>" class="navbar__link">Register</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="navbar__link">Contact</a>
      </div>
      <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="btn btn--secondary btn--sm btn--pill navbar__cta">Donate Now</a>
      <div class="navbar__hamburger" id="hamburger"><span></span><span></span><span></span></div>
    </div>
  </nav>

  <div class="mobile-menu" id="mobile-menu">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a><a href="<?php echo esc_url(home_url('/programs/')); ?>">Programs</a>
    <a href="<?php echo esc_url(home_url('/donate/')); ?>">Donate</a><a href="<?php echo esc_url(home_url('/register/')); ?>">Register</a><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="btn btn--secondary btn--pill" style="margin-top:1rem;">Donate Now</a>
  </div>

  <!-- Hero -->
  <section class="page-hero">
    <div class="container">
      <h1 class="display-lg">Make a Difference Today</h1>
      <p class="page-hero__subtitle body-lg">Every contribution builds a brighter tomorrow.</p>
    </div>
  </section>

  <!-- Donation Tiers -->
  <section class="section" id="choose-impact">
    <div class="container">
      <div class="label-lg text-primary text-center mb-4 animate-on-scroll">Choose Your Impact</div>
      <h2 class="headline-lg text-center mb-8 animate-on-scroll">Select a Giving Level</h2>
      <div class="grid-3" style="max-width: 900px; margin: 0 auto;">
        <div class="card donation-tier animate-on-scroll animate-delay-1">
          <div class="donation-tier__icon" style="background: var(--secondary-fixed);">🍽️</div>
          <div class="donation-tier__amount">₹500</div>
          <div class="donation-tier__desc body-md">Feed a Child for a Month</div>
          <button class="btn btn--secondary btn--pill" data-donate-amount="500" style="width: 100%;">Donate ₹500</button>
        </div>
        <div class="card donation-tier animate-on-scroll animate-delay-2" style="transform: scale(1.03); box-shadow: var(--shadow-lg);">
          <div class="donation-tier__icon" style="background: var(--primary-fixed);">📚</div>
          <div class="donation-tier__amount">₹2,000</div>
          <div class="donation-tier__desc body-md">Sponsor a Student's Education for a Year</div>
          <button class="btn btn--primary btn--pill" data-donate-amount="2000" style="width: 100%;">Donate ₹2,000</button>
        </div>
        <div class="card donation-tier animate-on-scroll animate-delay-3">
          <div class="donation-tier__icon" style="background: var(--tertiary-fixed);">🏥</div>
          <div class="donation-tier__amount">₹10,000</div>
          <div class="donation-tier__desc body-md">Fund a Mobile Health Camp</div>
          <button class="btn btn--secondary btn--pill" data-donate-amount="10000" style="width: 100%;">Donate ₹10,000</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Custom Donation -->
  <section class="section bg-surface-low" id="custom-donation">
    <div class="container">
      <div class="card animate-on-scroll" style="max-width: 500px; margin: 0 auto; text-align: center;">
        <h3 class="headline-md mb-4">Custom Donation</h3>
        <p class="body-md text-muted mb-6">Enter an amount that works for you.</p>
        <div style="display: flex; gap: var(--space-3); align-items: center;">
          <span class="title-lg text-primary" style="flex-shrink: 0;">₹</span>
          <input type="number" id="custom-amount" class="form-input" placeholder="Enter amount" min="1" style="text-align: center; font-size: 1.25rem; font-weight: 600;">
        </div>
        <button id="donate-now-btn" class="btn btn--secondary btn--lg btn--pill mt-6" style="width: 100%;">
          <span class="material-symbols-rounded">volunteer_activism</span>
          Donate Now
        </button>
      </div>
    </div>
  </section>

  <!-- Other Ways to Help -->
  <section class="section" id="other-ways">
    <div class="container">
      <h2 class="headline-lg text-center mb-8 animate-on-scroll">Other Ways to Help</h2>
      <div class="grid-3" style="max-width: 900px; margin: 0 auto;">
        <div class="card animate-on-scroll animate-delay-1" style="text-align: center; padding: var(--space-8);">
          <div class="value-card__icon" style="background: var(--primary-fixed); margin: 0 auto var(--space-4);">
            <span class="material-symbols-rounded">groups</span>
          </div>
          <h3 class="title-lg mb-4">Volunteer</h3>
          <p class="body-sm text-muted mb-6">Join our on-ground teams in teaching, healthcare, and community development programs.</p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--ghost-dark btn--sm btn--pill">Sign Up →</a>
        </div>
        <div class="card animate-on-scroll animate-delay-2" style="text-align: center; padding: var(--space-8);">
          <div class="value-card__icon" style="background: var(--tertiary-fixed); margin: 0 auto var(--space-4);">
            <span class="material-symbols-rounded">handshake</span>
          </div>
          <h3 class="title-lg mb-4">Corporate Partnership</h3>
          <p class="body-sm text-muted mb-6">CSR initiatives, employee giving programs, and matching gifts for organizational impact.</p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--ghost-dark btn--sm btn--pill">Partner With Us →</a>
        </div>
        <div class="card animate-on-scroll animate-delay-3" style="text-align: center; padding: var(--space-8);">
          <div class="value-card__icon" style="background: var(--secondary-fixed); margin: 0 auto var(--space-4);">
            <span class="material-symbols-rounded">share</span>
          </div>
          <h3 class="title-lg mb-4">Spread the Word</h3>
          <p class="body-sm text-muted mb-6">Share our mission on social media, organize fundraisers, or host awareness events.</p>
          <div class="social-links" style="justify-content: center;">
            <a href="#" class="social-link" aria-label="Facebook"><span class="material-symbols-rounded">public</span></a>
            <a href="#" class="social-link" aria-label="Instagram"><span class="material-symbols-rounded">photo_camera</span></a>
            <a href="#" class="social-link" aria-label="Twitter"><span class="material-symbols-rounded">share</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Transparency Promise -->
  <section class="section bg-surface-low" id="transparency">
    <div class="container">
      <div class="trust-section animate-on-scroll" style="max-width: 700px; margin: 0 auto;">
        <h3 class="headline-md mb-6" style="color: var(--on-primary-fixed);">
          <span class="material-symbols-rounded" style="vertical-align: middle;">verified_user</span>
          Transparency Promise
        </h3>
        <div class="trust-item">
          <div class="trust-item__icon"><span class="material-symbols-rounded" style="font-size: 0.875rem;">check</span></div>
          <span class="body-md">100% of donations go directly to programs</span>
        </div>
        <div class="trust-item">
          <div class="trust-item__icon"><span class="material-symbols-rounded" style="font-size: 0.875rem;">check</span></div>
          <span class="body-md">Annual audited reports available</span>
        </div>
        <div class="trust-item">
          <div class="trust-item__icon"><span class="material-symbols-rounded" style="font-size: 0.875rem;">check</span></div>
          <span class="body-md">Tax benefits under Section 80G</span>
        </div>
        <div class="trust-item">
          <div class="trust-item__icon"><span class="material-symbols-rounded" style="font-size: 0.875rem;">check</span></div>
          <span class="body-md">FCRA Registration details available on request</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Donors (Social Proof) -->
  <section class="section" id="recent-donors">
    <div class="container">
      <h2 class="headline-lg text-center mb-6 animate-on-scroll">Recent Donors</h2>
      <p class="body-md text-muted text-center mb-8 animate-on-scroll">Join the community making a difference.</p>
      <div class="donors-scroll animate-on-scroll">
        <div class="card donor-card">
          <div class="donor-card__name">Amit K.</div>
          <div class="donor-card__amount">₹5,000</div>
          <div class="donor-card__time">2 Hours Ago</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Anonymous</div>
          <div class="donor-card__amount">₹1,200</div>
          <div class="donor-card__time">5 Hours Ago</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Priya S.</div>
          <div class="donor-card__amount">₹10,000</div>
          <div class="donor-card__time">Yesterday</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Rahul M.</div>
          <div class="donor-card__amount">₹2,000</div>
          <div class="donor-card__time">Yesterday</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Anonymous</div>
          <div class="donor-card__amount">₹500</div>
          <div class="donor-card__time">2 Days Ago</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Sunita D.</div>
          <div class="donor-card__amount">₹15,000</div>
          <div class="donor-card__time">3 Days Ago</div>
        </div>
        <div class="card donor-card">
          <div class="donor-card__name">Tech Corp.</div>
          <div class="donor-card__amount">₹50,000</div>
          <div class="donor-card__time">Last Week</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-section__content">
        <h2 class="headline-lg cta-section__title animate-on-scroll">Have Questions?</h2>
        <p class="body-lg cta-section__subtitle animate-on-scroll">Our team is here to help you understand your impact.</p>
        <div class="cta-section__actions animate-on-scroll">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--ghost btn--lg btn--pill">
            <span class="material-symbols-rounded">mail</span> Contact Us
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer__grid">
        <div>
          <div class="footer__brand">🤍 Karma Devi Trust</div>
          <p class="footer__desc">Built with Heart. Registered Non-Profit Organisation since 2005.</p>
          <div class="social-links">
            <a href="#" class="social-link" aria-label="Facebook"><span class="material-symbols-rounded">public</span></a>
            <a href="#" class="social-link" aria-label="Instagram"><span class="material-symbols-rounded">photo_camera</span></a>
            <a href="#" class="social-link" aria-label="Twitter"><span class="material-symbols-rounded">share</span></a>
            <a href="#" class="social-link" aria-label="YouTube"><span class="material-symbols-rounded">play_circle</span></a>
          </div>
        </div>
        <div>
          <div class="footer__heading">Quick Links</div>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__link">Home</a>
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer__link">About Us</a>
          <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link">Programs</a>
          <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="footer__link">Donate</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer__link">Contact</a>
        </div>
        <div>
          <div class="footer__heading">Programs</div>
          <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link">Education</a>
          <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link">Healthcare</a>
          <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link">Women Empowerment</a>
          <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link">Sustainability</a>
        </div>
        <div>
          <div class="footer__heading">Legal</div>
          <a href="#" class="footer__link">Privacy Policy</a>
          <a href="#" class="footer__link">Annual Reports</a>
          <a href="#" class="footer__link">Careers</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer__link">Contact</a>
        </div>
      </div>
      <div class="footer__bottom">
        <span>© 2025 Karma Devi Trust. Built with Heart.</span>
        <div class="footer__bottom-links">
          <a href="#" class="footer__link">Privacy Policy</a>
          <a href="#" class="footer__link">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>"></script>
  <?php wp_footer(); ?>
</body>
</html>
