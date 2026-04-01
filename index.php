<?php
/**
 * Πιπερακής Ηλεκτρολόγος — One Page Template
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Μάρκος Πιπερακής — Αδειούχος Ηλεκτρολόγος στην Καλαμαριά Θεσσαλονίκης. Οικιακές & εμπορικές ηλεκτρολογικές εγκαταστάσεις, βλάβες, πιστοποιητικά ΔΕΗ. Καλέστε: 693 459 1271">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ═══════════════════════════════════════════════════════
     EMERGENCY BAR
════════════════════════════════════════════════════════ -->
<div class="emergency-bar" role="banner">
  ⚡ Βλάβη ή Επείγον; Καλέστε τώρα:
  <a href="tel:6934591271">693 459 1271</a>
  &nbsp;·&nbsp; Καλαμαριά &amp; Θεσσαλονίκη
</div>


<!-- ═══════════════════════════════════════════════════════
     NAVIGATION
════════════════════════════════════════════════════════ -->
<nav class="site-nav" role="navigation" aria-label="Κύρια Πλοήγηση">
  <div class="nav-inner">

    <a href="#hero" class="nav-logo" aria-label="Μάρκος Πιπερακής Ηλεκτρολόγος">
      <span class="name">Μ. Πιπερακής</span>
      <span class="title">Αδειούχος Ηλεκτρολόγος</span>
    </a>

    <ul class="nav-links" role="list">
      <li><a href="#services">Υπηρεσίες</a></li>
      <li><a href="#about">Σχετικά</a></li>
      <li><a href="#areas">Περιοχές</a></li>
      <li><a href="#contact">Επικοινωνία</a></li>
    </ul>

    <a href="tel:6934591271" class="nav-call" aria-label="Τηλεφωνική κλήση">
      📞 693 459 1271
    </a>

    <button class="nav-hamburger" aria-label="Άνοιγμα μενού" aria-expanded="false" aria-controls="mobile-menu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu" role="menu">
  <a href="#services" role="menuitem">Υπηρεσίες</a>
  <a href="#about"    role="menuitem">Σχετικά</a>
  <a href="#areas"    role="menuitem">Περιοχές</a>
  <a href="#contact"  role="menuitem">Επικοινωνία</a>
  <div class="mobile-menu-call">
    <a href="tel:6934591271" class="btn btn--primary" style="width:100%;justify-content:center;">⚡ 693 459 1271</a>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════════ -->
<section class="hero" id="hero" aria-label="Αρχική">
  <div class="hero-inner">

    <div class="hero-content">
      <div class="hero-eyebrow">⚡ Αδειούχος Ηλεκτρολόγος · Καλαμαριά</div>

      <h1>
        Ηλεκτρολόγος που<br>
        <span>Λύνει το Πρόβλημα</span><br>
        Αμέσως
      </h1>

      <p class="hero-desc">
        Οικιακές &amp; επαγγελματικές ηλεκτρολογικές εγκαταστάσεις, επισκευές βλαβών,
        πιστοποιητικά ΔΕΗ και πολλά ακόμα — με εγγύηση και αξιοπιστία στην Καλαμαριά
        και σε όλη τη Θεσσαλονίκη.
      </p>

      <div class="hero-actions">
        <a href="tel:6934591271" class="btn btn--primary">⚡ Καλέστε Τώρα</a>
        <a href="#services"      class="btn btn--outline-light">Δείτε τις Υπηρεσίες</a>
      </div>

      <div class="hero-trust">
        <div class="trust-item"><span class="icon">⭐</span> 4.8 Google Rating</div>
        <div class="trust-dot" aria-hidden="true"></div>
        <div class="trust-item"><span class="icon">✅</span> Αδειούχος Εγκαταστάτης</div>
        <div class="trust-dot" aria-hidden="true"></div>
        <div class="trust-item"><span class="icon">📍</span> Καλαμαριά &amp; Θεσσαλονίκη</div>
      </div>
    </div>

    <div class="hero-phone-card" role="complementary" aria-label="Στοιχεία επικοινωνίας">
      <div class="label">Κλείστε Ραντεβού</div>
      <a href="tel:6934591271" class="phone-num">693 459 1271</a>
      <div class="availability">Δευτ–Παρ 08:00–20:00 · Σάβ 09:00–15:00</div>
      <hr class="divider">
      <div class="rating-row">
        <span class="stars">★★★★★</span>
        <span>4.8 · 19 αξιολογήσεις Google</span>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════════ -->
<section class="section section--alt" id="services" aria-labelledby="services-title">
  <div class="container">

    <div class="section-head">
      <span class="section-label">Υπηρεσίες</span>
      <h2 class="section-title" id="services-title">Τι Αναλαμβάνω</h2>
      <p class="section-sub">
        Πλήρης κάλυψη ηλεκτρολογικών αναγκών για σπίτια, διαμερίσματα,
        καταστήματα και επαγγελματικούς χώρους.
      </p>
    </div>

    <div class="services-grid" role="list">

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">🏠</div>
        <h3>Οικιακές Εγκαταστάσεις</h3>
        <p>Νέες ηλεκτρολογικές εγκαταστάσεις, αναβαθμίσεις πίνακα, ρηματισμοί και πρίζες σε κατοικίες και διαμερίσματα.</p>
      </article>

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">🏢</div>
        <h3>Επαγγελματικοί Χώροι</h3>
        <p>Ηλεκτρολογικές εγκαταστάσεις για καταστήματα, γραφεία, αποθήκες και βιομηχανικούς χώρους.</p>
      </article>

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">⚡</div>
        <h3>Επισκευές &amp; Βλάβες</h3>
        <p>Γρήγορη διάγνωση και επισκευή ηλεκτρολογικών βλαβών — σύντομη ανταπόκριση για την περιοχή σας.</p>
      </article>

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">🔌</div>
        <h3>Πίνακες Διανομής</h3>
        <p>Εγκατάσταση, αντικατάσταση και αναβάθμιση πινάκων. Ρελέ, ασφάλειες, διαφορικά — πλήρης εξοπλισμός.</p>
      </article>

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">📋</div>
        <h3>Πιστοποιητικά ΔΕΗ (ΥΔΕ)</h3>
        <p>Έκδοση Υπεύθυνης Δήλωσης Εγκαταστάτη για νέες συνδέσεις ρεύματος, αγοραπωλησίες και ενοικιάσεις.</p>
      </article>

      <article class="service-card" role="listitem">
        <div class="service-icon-wrap" aria-hidden="true">☀️</div>
        <h3>Φωτοβολταϊκά &amp; LED</h3>
        <p>Εγκατάσταση φωτοβολταϊκών συστημάτων, αντικατάσταση φωτισμού με LED και εξοικονόμηση ενέργειας.</p>
      </article>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     ABOUT
════════════════════════════════════════════════════════ -->
<section class="section" id="about" aria-labelledby="about-title">
  <div class="container">
    <div class="about-grid">

      <div class="about-visual">
        <div class="about-img-placeholder" aria-label="Μάρκος Πιπερακής - Ηλεκτρολόγος">
          👷
        </div>
        <div class="about-cert">
          ✅ Αδειούχος<br>Εγκαταστάτης
        </div>
      </div>

      <div class="about-content">
        <span class="section-label">Σχετικά με εμένα</span>
        <h2 class="section-title" id="about-title">Μάρκος Πιπερακής</h2>
        <p class="section-sub">
          Αδειούχος ηλεκτρολόγος εγκαταστάτης με έδρα στην Καλαμαριά. Αναλαμβάνω
          ηλεκτρολογικές εργασίες για ιδιώτες και επαγγελματίες σε όλη τη Θεσσαλονίκη,
          με ακρίβεια, ευθύνη και τήρηση όλων των κανονισμών ασφαλείας.
        </p>

        <ul class="about-checks" role="list">
          <li>Πτυχιούχος Ηλεκτρολόγος Εγκαταστάτης — άδεια Γ' ειδικότητας</li>
          <li>Άμεση ανταπόκριση — χωρίς άσκοπη αναμονή</li>
          <li>Καθαρή εργασία και τακτοποίηση του χώρου μετά</li>
          <li>Προφορική ή γραπτή τιμολόγηση πριν ξεκινήσουμε</li>
          <li>4.8 αστέρια στο Google — 19 αξιολογήσεις πελατών</li>
        </ul>

        <a href="tel:6934591271" class="btn btn--primary">⚡ Τηλεφωνήστε: 693 459 1271</a>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     STATS
════════════════════════════════════════════════════════ -->
<section class="section section--dark" id="stats" aria-label="Αριθμοί">
  <div class="container">
    <div class="stats-row" role="list">

      <div class="stat-item" role="listitem">
        <div class="stat-num" data-target="4.8" data-decimal="true">4.8</div>
        <div class="stat-label">Google Rating</div>
      </div>

      <div class="stat-item" role="listitem">
        <div class="stat-num" data-target="19">0</div>
        <div class="stat-label">Αξιολογήσεις</div>
      </div>

      <div class="stat-item" role="listitem">
        <div class="stat-num" data-target="100" data-suffix="%">0</div>
        <div class="stat-label">Πελάτες που Επιστρέφουν</div>
      </div>

      <div class="stat-item" role="listitem">
        <div class="stat-num" data-target="1">0</div>
        <div class="stat-label">Ημέρα Αναμονή κατά μέσο όρο</div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     AREAS
════════════════════════════════════════════════════════ -->
<section class="section section--alt" id="areas" aria-labelledby="areas-title">
  <div class="container">

    <div class="section-head">
      <span class="section-label">Περιοχές</span>
      <h2 class="section-title" id="areas-title">Εξυπηρετώ όλη τη Θεσσαλονίκη</h2>
      <p class="section-sub">
        Έδρα στην Καλαμαριά — άμεση μετάβαση σε οποιαδήποτε περιοχή της πόλης.
      </p>
    </div>

    <div class="areas-grid" role="list">
      <?php
      $areas = [
        'Καλαμαριά', 'Θεσσαλονίκη Κέντρο', 'Πυλαία', 'Τριανδρία', 'Σταυρούπολη',
        'Εύοσμος', 'Ωραιόκαστρο', 'Πολίχνη', 'Αμπελόκηποι', 'Νεάπολη',
        'Τούμπα', 'Ν. Κρήνη', 'Ηλιούπολη', 'Θέρμη', 'Μίκρα',
      ];
      foreach ( $areas as $area ) :
      ?>
        <span class="area-tag" role="listitem"><?php echo esc_html( $area ); ?></span>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     CONTACT
════════════════════════════════════════════════════════ -->
<section class="section" id="contact" aria-labelledby="contact-title">
  <div class="container">

    <div class="section-head">
      <span class="section-label">Επικοινωνία</span>
      <h2 class="section-title" id="contact-title">Κλείστε Ραντεβού</h2>
      <p class="section-sub">Καλέστε απευθείας ή αφήστε τα στοιχεία σας και θα επικοινωνήσω μαζί σας.</p>
    </div>

    <div class="contact-grid">

      <!-- Info block -->
      <div class="contact-block">
        <h3>Μάρκος Πιπερακής</h3>
        <p class="subtitle">Αδειούχος Ηλεκτρολόγος · Καλαμαριά</p>

        <div class="contact-items">

          <div class="contact-item">
            <div class="c-icon" aria-hidden="true">📍</div>
            <div>
              <div class="c-label">Διεύθυνση</div>
              <div class="c-value">Κρώμνης 5, Καλαμαριά<br>551 31, Θεσσαλονίκη</div>
            </div>
          </div>

          <div class="contact-item">
            <div class="c-icon" aria-hidden="true">🕐</div>
            <div>
              <div class="c-label">Ωράριο</div>
              <div class="c-value">Δευτ–Παρ: 08:00–20:00<br>Σάββατο: 09:00–15:00</div>
            </div>
          </div>

          <div class="contact-item">
            <div class="c-icon" aria-hidden="true">📧</div>
            <div>
              <div class="c-label">Email</div>
              <div class="c-value">
                <a href="mailto:info@markospiperakis.gr">info@markospiperakis.gr</a>
              </div>
            </div>
          </div>

        </div>

        <div class="call-cta-box">
          <a href="tel:6934591271">693 459 1271</a>
          <div class="hint">⚡ Άμεση Εξυπηρέτηση</div>
        </div>
      </div>

      <!-- Form -->
      <div class="contact-form">
        <div class="form-title">Φόρμα Αιτήματος</div>
        <form class="js-contact-form" method="post" novalidate aria-label="Φόρμα επικοινωνίας">
          <?php wp_nonce_field( 'piperakis_contact', 'piperakis_nonce' ); ?>

          <div class="form-row">
            <div class="form-group">
              <label for="name">Ονοματεπώνυμο *</label>
              <input type="text" id="name" name="name" required placeholder="π.χ. Γιώργης Παπαδόπουλος" autocomplete="name">
            </div>
            <div class="form-group">
              <label for="phone">Τηλέφωνο *</label>
              <input type="tel" id="phone" name="phone" required placeholder="69X XXX XXXX" autocomplete="tel">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="email@example.gr" autocomplete="email">
            </div>
            <div class="form-group">
              <label for="service">Υπηρεσία</label>
              <select id="service" name="service">
                <option value="">Επιλέξτε…</option>
                <option>Οικιακή Εγκατάσταση</option>
                <option>Επαγγελματικός Χώρος</option>
                <option>Επισκευή / Βλάβη</option>
                <option>Πίνακας Διανομής</option>
                <option>Πιστοποιητικό ΔΕΗ (ΥΔΕ)</option>
                <option>Φωτοβολταϊκά / LED</option>
                <option>Άλλο</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Περιγραφή εργασίας</label>
            <textarea id="message" name="message" placeholder="Περιγράψτε σύντομα τι χρειάζεστε…"></textarea>
          </div>

          <div class="form-message" role="alert" aria-live="polite"></div>

          <button type="submit" class="btn btn--primary form-submit">
            Αποστολή Αιτήματος ⚡
          </button>

        </form>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════════════════ -->
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-logo">Μ. Πιπερακής <span>⚡</span> Ηλεκτρολόγος</div>
      <p class="footer-copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Μάρκος Πιπερακής. Κρώμνης 5, Καλαμαριά. 693 459 1271</p>
      <ul class="footer-links" role="list">
        <li><a href="#services">Υπηρεσίες</a></li>
        <li><a href="#areas">Περιοχές</a></li>
        <li><a href="#contact">Επικοινωνία</a></li>
      </ul>
    </div>
    <p class="footer-built">
      Σχεδιάστηκε &amp; αναπτύχθηκε από <a href="https://blyp.gr" target="_blank" rel="noopener">blyp.gr</a>
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
