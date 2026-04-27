<?php /* Auto-converted from register.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | Karma Devi Trust</title>
  <meta name="description" content="Register with Karma Devi Trust to access our support programs in education, healthcare, and women empowerment. Join our community of change-makers.">
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
        <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="navbar__link">Donate</a>
        <a href="<?php echo esc_url(home_url('/register/')); ?>" class="navbar__link navbar__link--active">Register</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="navbar__link">Contact</a>
      </div>
      <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="btn btn--secondary btn--sm btn--pill navbar__cta">Donate Now</a>
      <div class="navbar__hamburger" id="hamburger"><span></span><span></span><span></span></div>
    </div>
  </nav>

  <div class="mobile-menu" id="mobile-menu">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
    <a href="<?php echo esc_url(home_url('/programs/')); ?>">Programs</a>
    <a href="<?php echo esc_url(home_url('/donate/')); ?>">Donate</a>
    <a href="<?php echo esc_url(home_url('/register/')); ?>">Register</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="btn btn--secondary btn--pill" style="margin-top:1rem;">Donate Now</a>
  </div>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <h1 class="display-lg">Registration</h1>
      <p class="page-hero__subtitle body-lg">Join our community of change-makers. Your information helps us architect a better future for those in need.</p>
    </div>
  </section>

  <!-- Registration Form -->
  <section class="section" id="registration-form">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 380px; gap: var(--space-10); align-items: start; max-width: 1000px; margin: 0 auto;">

        <!-- Form -->
        <div class="card animate-on-scroll" style="padding: var(--space-10);">

          <!-- Step Indicator -->
          <div style="display: flex; align-items: center; gap: var(--space-3); margin-bottom: var(--space-8);" id="step-indicator">
            <div class="step-dot step-dot--active" data-step="1">
              <span>1</span>
            </div>
            <div style="flex: 1; height: 2px; background: var(--primary-fixed); border-radius: var(--radius-full);">
              <div style="height: 100%; width: 0%; background: var(--primary); border-radius: var(--radius-full); transition: width 0.4s ease;" id="step-progress"></div>
            </div>
            <div class="step-dot" data-step="2">
              <span>2</span>
            </div>
            <div style="flex: 1; height: 2px; background: var(--primary-fixed); border-radius: var(--radius-full);">
              <div style="height: 100%; width: 0%; background: var(--primary); border-radius: var(--radius-full); transition: width 0.4s ease;" id="step-progress-2"></div>
            </div>
            <div class="step-dot" data-step="3">
              <span>3</span>
            </div>
          </div>

          <form id="registration-form-el">

            <!-- Step 1: Personal Information -->
            <div class="form-step" id="step-1" style="display: block;">
              <div class="label-lg text-primary mb-4">
                <span class="material-symbols-rounded" style="vertical-align: middle;">person</span> Personal Information
              </div>
              <h2 class="headline-md mb-6">Tell us about yourself</h2>

              <div class="grid-2" style="gap: var(--space-4);">
                <div class="form-group">
                  <label for="first-name">First Name *</label>
                  <input type="text" id="first-name" name="firstName" class="form-input" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name *</label>
                  <input type="text" id="last-name" name="lastName" class="form-input" placeholder="Enter your last name" required>
                </div>
              </div>

              <div class="form-group">
                <label for="reg-email">Email Address *</label>
                <input type="email" id="reg-email" name="email" class="form-input" placeholder="you@example.com" required>
              </div>

              <div class="grid-2" style="gap: var(--space-4);">
                <div class="form-group">
                  <label for="reg-phone">Phone Number *</label>
                  <input type="tel" id="reg-phone" name="phone" class="form-input" placeholder="+91 XXXXX XXXXX" required>
                </div>
                <div class="form-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" id="dob" name="dob" class="form-input">
                </div>
              </div>

              <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-select">
                  <option value="" disabled selected>Select gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                  <option value="prefer-not">Prefer not to say</option>
                </select>
              </div>

              <div class="form-group">
                <label for="aadhaar">Aadhaar Number (Optional)</label>
                <input type="text" id="aadhaar" name="aadhaar" class="form-input" placeholder="XXXX XXXX XXXX" maxlength="14">
              </div>

              <button type="button" class="btn btn--primary btn--lg btn--pill" style="width: 100%;" onclick="nextStep(2)">
                Continue <span class="material-symbols-rounded" style="font-size: 1.125rem;">arrow_forward</span>
              </button>
            </div>

            <!-- Step 2: Address & Family Details -->
            <div class="form-step" id="step-2" style="display: none;">
              <div class="label-lg text-primary mb-4">
                <span class="material-symbols-rounded" style="vertical-align: middle;">home</span> Address & Family Details
              </div>
              <h2 class="headline-md mb-6">Where do you live?</h2>

              <div class="form-group">
                <label for="address">Full Address *</label>
                <textarea id="address" name="address" class="form-textarea" placeholder="House/Street, Village/Town" required style="min-height: 80px;"></textarea>
              </div>

              <div class="grid-2" style="gap: var(--space-4);">
                <div class="form-group">
                  <label for="village">Village / Town *</label>
                  <input type="text" id="village" name="village" class="form-input" placeholder="Enter village/town" required>
                </div>
                <div class="form-group">
                  <label for="block">Block / Tehsil</label>
                  <input type="text" id="block" name="block" class="form-input" placeholder="Enter block/tehsil">
                </div>
              </div>

              <div class="grid-2" style="gap: var(--space-4);">
                <div class="form-group">
                  <label for="district">District *</label>
                  <input type="text" id="district" name="district" class="form-input" placeholder="Enter district" required>
                </div>
                <div class="form-group">
                  <label for="pincode">PIN Code *</label>
                  <input type="text" id="pincode" name="pincode" class="form-input" placeholder="XXXXXX" maxlength="6" required>
                </div>
              </div>

              <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" class="form-select">
                  <option value="" disabled selected>Select state</option>
                  <option value="UP">Uttar Pradesh</option>
                  <option value="BR">Bihar</option>
                  <option value="MP">Madhya Pradesh</option>
                  <option value="RJ">Rajasthan</option>
                  <option value="JH">Jharkhand</option>
                  <option value="CG">Chhattisgarh</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <hr style="border: none; height: 1px; background: var(--surface-container-high); margin: var(--space-6) 0;">

              <div class="label-lg text-tertiary mb-4">
                <span class="material-symbols-rounded" style="vertical-align: middle;">family_restroom</span> Family Composition
              </div>
              <p class="body-sm text-muted mb-6">Please mention the total number of members living with you.</p>

              <div class="grid-2" style="gap: var(--space-4);">
                <div class="form-group">
                  <label for="family-members">Total Family Members</label>
                  <input type="number" id="family-members" name="familyMembers" class="form-input" placeholder="e.g. 5" min="1" max="20">
                </div>
                <div class="form-group">
                  <label for="children">Children (under 18)</label>
                  <input type="number" id="children" name="children" class="form-input" placeholder="e.g. 2" min="0" max="15">
                </div>
              </div>

              <div class="form-group">
                <label for="annual-income">Annual Household Income (Approx.)</label>
                <select id="annual-income" name="annualIncome" class="form-select">
                  <option value="" disabled selected>Select range</option>
                  <option value="below-50k">Below ₹50,000</option>
                  <option value="50k-1l">₹50,000 – ₹1,00,000</option>
                  <option value="1l-2l">₹1,00,000 – ₹2,00,000</option>
                  <option value="2l-5l">₹2,00,000 – ₹5,00,000</option>
                  <option value="above-5l">Above ₹5,00,000</option>
                </select>
              </div>

              <div style="display: flex; gap: var(--space-4);">
                <button type="button" class="btn btn--ghost-dark btn--lg btn--pill" style="flex: 1;" onclick="prevStep(1)">
                  <span class="material-symbols-rounded" style="font-size: 1.125rem;">arrow_back</span> Back
                </button>
                <button type="button" class="btn btn--primary btn--lg btn--pill" style="flex: 2;" onclick="nextStep(3)">
                  Continue <span class="material-symbols-rounded" style="font-size: 1.125rem;">arrow_forward</span>
                </button>
              </div>
            </div>

            <!-- Step 3: Program Selection & Submit -->
            <div class="form-step" id="step-3" style="display: none;">
              <div class="label-lg text-primary mb-4">
                <span class="material-symbols-rounded" style="vertical-align: middle;">checklist</span> Program Interest
              </div>
              <h2 class="headline-md mb-6">What programs interest you?</h2>

              <div class="form-group">
                <label>Select programs you're interested in:</label>
                <div style="display: flex; flex-direction: column; gap: var(--space-3); margin-top: var(--space-3);">
                  <label class="checkbox-label">
                    <input type="checkbox" name="programs" value="education" class="form-checkbox">
                    <span class="checkbox-custom"></span>
                    <span><strong>Vidya Shakti</strong> — Education support for children</span>
                  </label>
                  <label class="checkbox-label">
                    <input type="checkbox" name="programs" value="healthcare" class="form-checkbox">
                    <span class="checkbox-custom"></span>
                    <span><strong>Arogya Seva</strong> — Healthcare access & medical camps</span>
                  </label>
                  <label class="checkbox-label">
                    <input type="checkbox" name="programs" value="women" class="form-checkbox">
                    <span class="checkbox-custom"></span>
                    <span><strong>Shakti</strong> — Women empowerment & skill development</span>
                  </label>
                  <label class="checkbox-label">
                    <input type="checkbox" name="programs" value="sustainability" class="form-checkbox">
                    <span class="checkbox-custom"></span>
                    <span><strong>Prakriti</strong> — Sustainable development & environment</span>
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label for="reg-how-heard">How did you hear about us?</label>
                <select id="reg-how-heard" name="howHeard" class="form-select">
                  <option value="" disabled selected>Select an option</option>
                  <option value="community">Community leader / Village head</option>
                  <option value="volunteer">Karma Devi volunteer</option>
                  <option value="camp">Medical / Education camp</option>
                  <option value="social">Social media</option>
                  <option value="friend">Friend or family member</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="form-group">
                <label for="reg-notes">Additional Notes (Optional)</label>
                <textarea id="reg-notes" name="additionalNotes" class="form-textarea" placeholder="Any specific needs or information you'd like us to know..." style="min-height: 80px;"></textarea>
              </div>

              <!-- Consent -->
              <div style="padding: var(--space-4); background: var(--surface-container-low); border-radius: var(--radius-md); margin-bottom: var(--space-6);">
                <label class="checkbox-label">
                  <input type="checkbox" name="consent" id="consent" class="form-checkbox" required>
                  <span class="checkbox-custom"></span>
                  <span class="body-sm">I consent to Karma Devi Trust collecting and processing my personal data for program eligibility and support services. I understand I can withdraw my consent at any time.</span>
                </label>
              </div>

              <div style="display: flex; gap: var(--space-4);">
                <button type="button" class="btn btn--ghost-dark btn--lg btn--pill" style="flex: 1;" onclick="prevStep(2)">
                  <span class="material-symbols-rounded" style="font-size: 1.125rem;">arrow_back</span> Back
                </button>
                <button type="submit" class="btn btn--secondary btn--lg btn--pill" style="flex: 2;" id="submit-registration">
                  <span class="material-symbols-rounded" style="font-size: 1.125rem;">how_to_reg</span>
                  Submit Registration
                </button>
              </div>
            </div>

            <!-- Success Message (hidden by default) -->
            <div id="registration-success" style="display: none; text-align: center; padding: var(--space-10) 0;">
              <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #1b5e20, #388e3c); color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-6); font-size: 2.5rem;">
                <span class="material-symbols-rounded" style="font-size: 2.5rem;">check</span>
              </div>
              <h2 class="headline-lg mb-4" style="color: #1b5e20;">Registration Successful!</h2>
              <p class="body-lg text-muted mb-6">Thank you for registering with Karma Devi Trust. Our team will review your application and reach out to you within 3-5 working days.</p>
              <p class="body-md text-muted mb-8">A confirmation has been sent to your email address.</p>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--primary btn--pill">
                <span class="material-symbols-rounded">home</span> Back to Home
              </a>
            </div>

          </form>
        </div>

        <!-- Sidebar -->
        <div>
          <!-- Why Register Card -->
          <div class="card animate-on-scroll animate-delay-1 mb-6" style="padding: var(--space-6); border-left: 4px solid var(--primary);">
            <div class="title-md mb-4">
              <span class="material-symbols-rounded text-primary" style="vertical-align: middle;">info</span>
              Why we collect this data?
            </div>
            <p class="body-sm text-muted">Karma Devi Trust operates on a principle of precision-targeted philanthropy. By understanding your family structure and economic status, we can tailor our support programs—ranging from education grants to healthcare assistance—to your specific needs.</p>
          </div>

          <!-- Trust Badges -->
          <div class="card animate-on-scroll animate-delay-2 mb-6" style="padding: var(--space-6);">
            <div class="title-md mb-4">
              <span class="material-symbols-rounded text-primary" style="vertical-align: middle;">verified_user</span>
              Your Data is Safe
            </div>
            <div class="trust-item" style="padding: var(--space-2) 0;">
              <div class="trust-item__icon" style="width: 24px; height: 24px;">
                <span class="material-symbols-rounded" style="font-size: 0.75rem;">lock</span>
              </div>
              <span class="body-sm">256-bit SSL encryption</span>
            </div>
            <div class="trust-item" style="padding: var(--space-2) 0;">
              <div class="trust-item__icon" style="width: 24px; height: 24px;">
                <span class="material-symbols-rounded" style="font-size: 0.75rem;">shield</span>
              </div>
              <span class="body-sm">GDPR compliant</span>
            </div>
            <div class="trust-item" style="padding: var(--space-2) 0;">
              <div class="trust-item__icon" style="width: 24px; height: 24px;">
                <span class="material-symbols-rounded" style="font-size: 0.75rem;">visibility_off</span>
              </div>
              <span class="body-sm">No data shared with third parties</span>
            </div>
          </div>

          <!-- Quick Links -->
          <div class="card animate-on-scroll animate-delay-3" style="padding: var(--space-6);">
            <div class="title-md mb-4">Resources</div>
            <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link" style="display: flex; align-items: center; gap: var(--space-2); padding: var(--space-2) 0;">
              <span class="material-symbols-rounded text-primary" style="font-size: 1.125rem;">auto_awesome</span> Impact Report
            </a>
            <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="footer__link" style="display: flex; align-items: center; gap: var(--space-2); padding: var(--space-2) 0;">
              <span class="material-symbols-rounded text-primary" style="font-size: 1.125rem;">school</span> Programs
            </a>
            <a href="<?php echo esc_url(home_url('/donate/')); ?>" class="footer__link" style="display: flex; align-items: center; gap: var(--space-2); padding: var(--space-2) 0;">
              <span class="material-symbols-rounded text-primary" style="font-size: 1.125rem;">verified</span> Transparency
            </a>
          </div>
        </div>
      </div>

      <!-- Motto -->
      <div class="text-center mt-8 animate-on-scroll">
        <p class="body-lg text-muted" style="font-style: italic; max-width: 600px; margin: 0 auto;">
          "Building a foundation of hope through structural compassion and architectural precision in social welfare."
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer__grid">
        <div>
          <div class="footer__brand">🤍 Karma Devi Trust</div>
          <p class="footer__desc">Registered Non-Profit Organisation dedicated to social upliftment since 2005.</p>
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
          <a href="<?php echo esc_url(home_url('/register/')); ?>" class="footer__link">Register</a>
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
          <div class="footer__heading">Support</div>
          <a href="#" class="footer__link">Privacy Policy</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer__link">Contact</a>
          <a href="#" class="footer__link">Annual Report</a>
          <a href="#" class="footer__link">Terms of Service</a>
        </div>
      </div>
      <div class="footer__bottom">
        <span>© 2025 Karma Devi Trust. All Rights Reserved.</span>
        <div class="footer__bottom-links">
          <a href="#" class="footer__link">Privacy Policy</a>
          <a href="#" class="footer__link">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo esc_url(get_template_directory_uri() . '/js/main.js'); ?>"></script>
  <?php wp_footer(); ?>
  <script>
    // --- Multi-Step Form Logic ---
    let currentStep = 1;
    const totalSteps = 3;

    function nextStep(step) {
      // Basic validation for current step
      const currentStepEl = document.getElementById('step-' + currentStep);
      const requiredFields = currentStepEl.querySelectorAll('[required]');
      let valid = true;

      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          field.style.borderColor = 'var(--error)';
          valid = false;
          setTimeout(() => { field.style.borderColor = ''; }, 2000);
        }
      });

      if (!valid) {
        return;
      }

      currentStepEl.style.display = 'none';
      document.getElementById('step-' + step).style.display = 'block';
      currentStep = step;
      updateStepIndicator();

      // Scroll to top of form
      document.getElementById('registration-form').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function prevStep(step) {
      document.getElementById('step-' + currentStep).style.display = 'none';
      document.getElementById('step-' + step).style.display = 'block';
      currentStep = step;
      updateStepIndicator();
    }

    function updateStepIndicator() {
      const dots = document.querySelectorAll('.step-dot');
      dots.forEach((dot, index) => {
        if (index + 1 <= currentStep) {
          dot.classList.add('step-dot--active');
        } else {
          dot.classList.remove('step-dot--active');
        }
      });

      const progress1 = document.getElementById('step-progress');
      const progress2 = document.getElementById('step-progress-2');

      if (currentStep >= 2) {
        progress1.style.width = '100%';
      } else {
        progress1.style.width = '0%';
      }

      if (currentStep >= 3) {
        progress2.style.width = '100%';
      } else {
        progress2.style.width = '0%';
      }
    }

    // Form submission
    const regForm = document.getElementById('registration-form-el');
    if (regForm) {
      regForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const consent = document.getElementById('consent');
        if (!consent.checked) {
          consent.parentElement.parentElement.style.background = 'var(--error-container)';
          setTimeout(() => {
            consent.parentElement.parentElement.style.background = '';
          }, 2000);
          return;
        }

        // Hide form, show success
        document.getElementById('step-3').style.display = 'none';
        document.getElementById('step-indicator').style.display = 'none';
        document.getElementById('registration-success').style.display = 'block';

        // Log form data
        const formData = new FormData(regForm);
        console.log('Registration submitted:', Object.fromEntries(formData.entries()));
      });
    }
  </script>
</body>
</html>
