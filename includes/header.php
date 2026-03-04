<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_body_open', 'custom_snippets_header' );
add_action( 'wp_enqueue_scripts', 'custom_snippets_header_styles' );

function custom_snippets_header() {
    $logo_url = content_url( '/uploads/2026/03/logo.svg' );
    $home     = esc_url( home_url( '/' ) );
    ?>
    <header id="cm-header">
        <div class="cm-header__inner">
            <a class="cm-header__logo" href="<?php echo $home; ?>">
                <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            </a>

            <nav class="cm-header__nav">
                <ul class="cm-header__menu">
                    <li class="cm-header__menu-item has-mega" data-mega="beyti">
                        <a href="#">בייתי</a>
                        <div class="cm-mobile-sub">
                            <a href="#">מערכת סולארית על גג ביתי</a>
                            <a href="#">תקבולי המערכת</a>
                            <a href="#">אפשרויות מימון</a>
                        </div>
                    </li>
                    <li class="cm-header__menu-item has-mega" data-mega="mischari">
                        <a href="#">מסחרי</a>
                        <div class="cm-mobile-sub">
                            <a href="#">מערכת סולארית על גג העסק</a>
                            <a href="#">שכירות גג</a>
                            <a href="#">הערכות תפוקה ותזרים</a>
                        </div>
                    </li>
                    <li class="cm-header__menu-item has-mega" data-mega="benleumi">
                        <a href="#">בינלאומי</a>
                        <div class="cm-mobile-sub">
                            <a href="#">מערכת סולארית על גג העסק</a>
                            <a href="#">שכירות גג</a>
                            <a href="#">הערכות תפוקה ותזרים</a>
                        </div>
                    </li>
                    <li><a href="#">מרכז הידע</a></li>
                    <li><a href="#">הפרוייקטים שלנו</a></li>
                    <li><a href="#">לקוחות מספרים</a></li>
                </ul>

                <!-- Mobile-only icon rows -->
                <div class="cm-mobile-icons">
                    <div class="cm-mobile-icon-row" data-mob-accordion>
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        <span class="cm-mobile-arrow"></span>
                    </div>
                    <div class="cm-mobile-icon-row" data-mob-accordion>
                        <svg width="25" height="25" viewBox="0 0 24 24" fill="#1a1a1a" stroke="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span class="cm-mobile-arrow"></span>
                        <div class="cm-mobile-icon-sub">
                            <span class="cm-mobile-icon-sub__title">יצירת קשר</span>
                            <span class="cm-mobile-icon-sub__label">חברה</span>
                            <span class="cm-mobile-icon-sub__text">עתיר ידע 16 כפר סבא</span>
                            <a href="mailto:info@kalmobil-energy.co.il">info@kalmobil-energy.co.il</a>
                            <a href="tel:072-2506205">072-2506205</a>
                            <span class="cm-mobile-icon-sub__label" style="margin-top:8px;">מכירות</span>
                            <a href="tel:*8075">*8075</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="cm-header__actions">
                <a class="cm-header__cta" href="#">בדיקת התאמה</a>
                <button class="cm-header__icon-btn cm-header__icon-btn--phone has-mega" data-mega="contact" aria-label="Contact">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#1a1a1a" stroke="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </button>
                <span class="cm-header__divider"></span>
                <button class="cm-header__icon-btn cm-header__icon-btn--globe" aria-label="Language">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </button>
            </div>

            <button class="cm-header__burger" aria-label="Menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Desktop Mega menu: בייתי -->
        <div class="cm-mega" id="cm-mega-beyti">
            <div class="cm-mega__inner">
                <div class="cm-mega__col cm-mega__col--text">
                    <h2 class="cm-mega__heading">אנרגיה סולארית<br>ואגירה בליווי<br>מלא</h2>
                </div>
                <div class="cm-mega__col cm-mega__col--links">
                    <span class="cm-mega__section-title">בייתי</span>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-name">מערכת סולארית על גג ביתי</a>
                        <p class="cm-mega__link-sub">חיסכון חודשי קבוע והפיכת הגג לנכס מניב</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">תקבולי המערכת</a>
                        <p class="cm-mega__link-desc">ניהול פשוט ושקוף של הכנסות ייצור החשמל</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">אפשרויות מימון</a>
                        <p class="cm-mega__link-desc">מודלים גמישים שמאפשרים להיכנס לפרויקט בלי להכביד על תזרים</p>
                    </div>
                </div>
                <div class="cm-mega__col cm-mega__col--image">
                    <img src="https://placehold.co/358x416/e8e8e8/999?text=Placeholder" alt="" width="358" height="416">
                </div>
                <div class="cm-mega__col cm-mega__col--cards">
                    <a href="#" class="cm-mega__card">
                        <span class="cm-mega__card-title">בואו לשמוע את הלקוחות</span>
                        <span class="cm-mega__card-desc">מערכות חכמות לעסקים שרוצים להרוויח יותר</span>
                        <span class="cm-mega__card-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
                    </a>
                    <a href="#" class="cm-mega__card">
                        <span class="cm-mega__card-title">מערכת סולארית על גג ביתי</span>
                        <span class="cm-mega__card-desc">מערכות חכמות לעסקים שרוצים להרוויח יותר</span>
                        <span class="cm-mega__card-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop Mega menu: מסחרי -->
        <div class="cm-mega" id="cm-mega-mischari">
            <div class="cm-mega__inner">
                <div class="cm-mega__col cm-mega__col--text">
                    <h2 class="cm-mega__heading">אנרגיה סולארית<br>ואגירה בליווי<br>מלא</h2>
                </div>
                <div class="cm-mega__col cm-mega__col--links">
                    <span class="cm-mega__section-title">מסחרי</span>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-name">מערכת סולארית על גג העסק</a>
                        <p class="cm-mega__link-sub">ניצול גגות להכנסה והקטנת חשמל</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">שכירות גג</a>
                        <p class="cm-mega__link-desc">הפיכת שטחים לא מנוצלים למקור הכנסה יציב</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">הערכות תפוקה ותזרים</a>
                        <p class="cm-mega__link-desc">בדיקת כדאיות ותחזית הכנסות</p>
                    </div>
                </div>
                <div class="cm-mega__col cm-mega__col--image">
                    <img src="https://placehold.co/358x416/e8e8e8/999?text=Placeholder" alt="" width="358" height="416">
                </div>
                <div class="cm-mega__col cm-mega__col--cards">
                    <a href="#" class="cm-mega__card">
                        <span class="cm-mega__card-title">מערכת סולארית על גג העסק</span>
                        <span class="cm-mega__card-desc">מערכות חכמות לעסקים שרוצים להרוויח יותר</span>
                        <span class="cm-mega__card-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
                    </a>
                    <a href="#" class="cm-mega__card">
                        <span class="cm-mega__card-title">מערכת סולארית על גג העסק</span>
                        <span class="cm-mega__card-desc">מערכות חכמות לעסקים שרוצים להרוויח יותר</span>
                        <span class="cm-mega__card-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop Mega menu: בינלאומי -->
        <div class="cm-mega cm-mega--wide" id="cm-mega-benleumi">
            <div class="cm-mega__inner cm-mega__inner--3col">
                <div class="cm-mega__col cm-mega__col--text">
                    <h2 class="cm-mega__heading">אנרגיה סולארית<br>ואגירה בליווי<br>מלא</h2>
                </div>
                <div class="cm-mega__col cm-mega__col--links">
                    <span class="cm-mega__section-title">בינלאומי</span>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-name">מערכת סולארית על גג העסק</a>
                        <p class="cm-mega__link-sub">ניצול גגות להכנסה והקטנת חשמל</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">שכירות גג</a>
                        <p class="cm-mega__link-desc">הפיכת שטחים לא מנוצלים למקור הכנסה יציב</p>
                    </div>
                    <div class="cm-mega__link-group">
                        <a href="#" class="cm-mega__link-title">הערכות תפוקה ותזרים</a>
                        <p class="cm-mega__link-desc">בדיקת כדאיות ותחזית הכנסות</p>
                    </div>
                </div>
                <div class="cm-mega__col cm-mega__col--image cm-mega__col--image-wide">
                    <img src="https://placehold.co/820x416/e8e8e8/999?text=Placeholder" alt="" width="820" height="416">
                </div>
            </div>
        </div>

        <!-- Desktop Mega menu: Contact -->
        <div class="cm-mega cm-mega--wide" id="cm-mega-contact">
            <div class="cm-mega__inner cm-mega__inner--3col">
                <div class="cm-mega__col cm-mega__col--text">
                    <h2 class="cm-mega__heading">כל הדרכים<br>ליצירת קשר</h2>
                </div>
                <div class="cm-mega__col cm-mega__col--links">
                    <span class="cm-mega__section-title">יצירת קשר</span>
                    <div class="cm-mega__link-group cm-mega__link-group--contact">
                        <span class="cm-mega__link-name" style="cursor:default;">חברה</span>
                        <p class="cm-mega__link-sub">עתיר ידע 16 כפר סבא</p>
                        <p class="cm-mega__link-sub"><a href="mailto:info@kalmobil-energy.co.il" style="color:#1a1a1a;text-decoration:none;">info@kalmobil-energy.co.il</a></p>
                        <p class="cm-mega__link-sub"><a href="tel:072-2506205" style="color:#1a1a1a;text-decoration:none;">072-2506205</a></p>
                    </div>
                    <div class="cm-mega__link-group cm-mega__link-group--contact cm-mega__link-group--sales">
                        <span class="cm-mega__link-name" style="cursor:default;">מכירות</span>
                        <p class="cm-mega__link-sub"><a href="tel:*8075" style="color:#1a1a1a;text-decoration:none;">*8075</a></p>
                    </div>
                </div>
                <div class="cm-mega__col cm-mega__col--image cm-mega__col--image-wide">
                    <img src="https://placehold.co/820x416/e8e8e8/999?text=Placeholder" alt="" width="820" height="416">
                </div>
            </div>
        </div>
    </header>

    <script>
    (function() {
        var isMobile = function() { return window.innerWidth <= 960; };

        /* === Desktop: hover mega menus === */
        var triggers = document.querySelectorAll('[data-mega]');
        var allMegas = document.querySelectorAll('.cm-mega');
        var closeTimer = null;

        function closeAll() {
            allMegas.forEach(function(m) { m.classList.remove('is-open'); });
            triggers.forEach(function(t) { t.classList.remove('is-active'); });
        }
        function openMega(trigger) {
            clearTimeout(closeTimer);
            var megaId = 'cm-mega-' + trigger.getAttribute('data-mega');
            var mega = document.getElementById(megaId);
            if (!mega) return;
            allMegas.forEach(function(m) { if (m !== mega) m.classList.remove('is-open'); });
            triggers.forEach(function(t) { if (t !== trigger) t.classList.remove('is-active'); });
            mega.classList.add('is-open');
            trigger.classList.add('is-active');
        }
        function scheduleClose() { closeTimer = setTimeout(closeAll, 200); }

        triggers.forEach(function(trigger) {
            trigger.addEventListener('mouseenter', function() {
                if (!isMobile()) openMega(trigger);
            });
            var link = trigger.querySelector('a');
            if (link) link.addEventListener('click', function(e) { e.preventDefault(); });
        });
        allMegas.forEach(function(mega) {
            mega.addEventListener('mouseenter', function() { clearTimeout(closeTimer); });
            mega.addEventListener('mouseleave', function() { if (!isMobile()) scheduleClose(); });
        });
        var headerInner = document.querySelector('.cm-header__inner');
        headerInner.addEventListener('mouseleave', function() { if (!isMobile()) scheduleClose(); });

        /* === Mobile: burger + accordion === */
        var burger = document.querySelector('.cm-header__burger');
        var nav = document.querySelector('.cm-header__nav');
        var cmHeader = document.getElementById('cm-header');

        burger.addEventListener('click', function() {
            var open = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!open));
            cmHeader.classList.toggle('mob-menu-open');
            nav.classList.toggle('is-open');
        });

        var accordionItems = document.querySelectorAll('.cm-header__menu-item.has-mega');
        var iconRows = document.querySelectorAll('[data-mob-accordion]');

        function closeAllAccordions() {
            accordionItems.forEach(function(i) { i.classList.remove('mob-open'); });
            iconRows.forEach(function(r) { r.classList.remove('mob-open'); });
        }

        accordionItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                if (!isMobile()) return;
                e.preventDefault();
                e.stopPropagation();
                var wasOpen = item.classList.contains('mob-open');
                closeAllAccordions();
                if (!wasOpen) item.classList.add('mob-open');
            });
        });

        iconRows.forEach(function(row) {
            row.addEventListener('click', function(e) {
                e.stopPropagation();
                var wasOpen = row.classList.contains('mob-open');
                closeAllAccordions();
                if (!wasOpen) row.classList.add('mob-open');
            });
        });
    })();
    </script>
    <?php
}

function custom_snippets_header_styles() {
    $css = <<<CSS

    #site-header { display: none !important; }

    #cm-header {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0;
        pointer-events: none;
        font-family: 'Ploni', 'Assistant', 'Heebo', Arial, sans-serif;
        direction: rtl;
    }

    .cm-header__inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 93vw; max-width: 93vw;
        padding: 0 32px;
        height: 93px; gap: 24px;
        background: #fff;
        border-radius: 60px;
        box-shadow: 0 2px 12px rgba(0,0,0,.06);
        pointer-events: auto;
        box-sizing: border-box;
    }

    .cm-header__logo { display: flex; align-items: center; flex-shrink: 0; }
    .cm-header__logo img { height: 48px; width: auto; }

    /* Nav */
    .cm-header__nav { flex: 1; display: flex; justify-content: center; }
    .cm-header__menu {
        list-style: none; display: flex; gap: 55px; margin: 0; padding: 0;
    }
    .cm-header__menu a {
        text-decoration: none; color: #1a1a1a; font-size: 18px;
        font-weight: 400; transition: color .2s; white-space: nowrap;
    }
    .cm-header__menu a:hover { color: #42B563; }
    .cm-header__menu-item.is-active > a { font-weight: 700; color: #1a1a1a; }

    /* Mobile sub-links (hidden on desktop) */
    .cm-mobile-sub { display: none; }
    .cm-mobile-icons { display: none; }

    /* Actions */
    .cm-header__actions { display: flex; align-items: center; gap: 12px; flex-shrink: 0; }
    .cm-header__cta {
        display: inline-flex; align-items: center; padding: 8px 24px;
        background: #8CFC89; color: #1a1a1a; font-size: 16px; font-weight: 500;
        font-family: inherit; border-radius: 50px; text-decoration: none;
        transition: background .2s; white-space: nowrap;
    }
    .cm-header__cta:hover { background: #7ae877; color: #1a1a1a; }

    .cm-header__icon-btn,
    .cm-header__icon-btn:hover,
    .cm-header__icon-btn:focus,
    .cm-header__icon-btn:active {
        display: flex; align-items: center; justify-content: center;
        width: 36px; height: 36px; border: none; background: none;
        cursor: pointer; color: #555 !important; padding: 0;
        text-decoration: none; outline: none; box-shadow: none;
    }

    .cm-header__icon-btn--phone {
        width: 45px !important; height: 45px !important;
        border-radius: 50%;
        border: none !important;
        background: transparent !important;
        position: relative;
    }
    .cm-header__icon-btn--phone::before {
        content: '';
        position: absolute;
        top: 50%; left: 50%;
        width: 32px; height: 32px;
        transform: translate(-50%, -50%);
        border: 2px solid #1a1a1a;
        border-radius: 50%;
        background: #fff;
        transition: all .2s;
    }
    .cm-header__icon-btn--phone:hover::before,
    .cm-header__icon-btn--phone.is-active::before {
        width: 45px; height: 45px;
        border-color: #8CFC89;
        background: #8CFC89;
    }
    .cm-header__icon-btn--phone svg {
        fill: #1a1a1a; stroke: none;
        position: relative; z-index: 1;
    }

    .cm-header__icon-btn--globe { width: 25px !important; height: 25px !important; }

    .cm-header__divider { width: 1px; height: 24px; background: #E4E8F2; flex-shrink: 0; }

    .cm-header__burger {
        display: none; flex-direction: column; gap: 5px;
        background: none; border: none; cursor: pointer; padding: 8px;
    }
    .cm-header__burger span {
        display: block; width: 15px; height: 2px; background: #1a1a1a;
        border-radius: 2px; transition: transform .3s, opacity .3s;
    }

    body { padding-top: 0 !important; margin-top: 0 !important; }

    /* ===== Desktop Mega Menu ===== */
    .cm-mega {
        width: 93vw; max-height: 0; overflow: hidden;
        pointer-events: none; opacity: 0;
        transition: max-height .4s ease, opacity .3s ease, margin .3s ease;
        margin-top: 0;
    }
    .cm-mega.is-open {
        max-height: 500px; opacity: 1; pointer-events: auto; margin-top: 8px;
    }
    .cm-mega__inner {
        display: grid; grid-template-columns: 1.2fr 1fr 358px 1fr;
        gap: 50px; background: #fff; border-radius: 60px;
        box-shadow: 0 4px 24px rgba(0,0,0,.08); padding: 40px 48px; box-sizing: border-box;
    }

    .cm-mega__col--text { display: flex; align-items: flex-start; padding-top: 0; max-width: 380px; }
    .cm-mega__heading { font-size: 46px; font-weight: 500; color: #1a1a1a; line-height: 1.2; margin: 0; }

    .cm-mega__col--links { display: flex; flex-direction: column; gap: 35px; padding-top: 0; }
    .cm-mega__section-title { display: block; font-size: 25px; font-weight: 500; color: #1a1a1a; }
    .cm-mega__link-group { display: flex; flex-direction: column; gap: 4px; }
    .cm-mega__link-name, .cm-mega__link-title {
        display: block; font-size: 20px; font-weight: 600; color: #1a1a1a;
        text-decoration: none; transition: color .2s;
    }
    .cm-mega__link-name:hover, .cm-mega__link-title:hover { color: #42B563; }
    .cm-mega__link-sub, .cm-mega__link-desc {
        font-size: 18px; font-weight: 400; color: #555; margin: 0; line-height: 1.4;
    }

    .cm-mega__link-group--contact { gap: 30px; }
    .cm-mega__link-group--sales { margin-top: 20px; }

    .cm-mega__inner--3col { grid-template-columns: 1.2fr 1fr auto; }

    .cm-mega__col--image { display: flex; align-items: stretch; }
    .cm-mega__col--image img {
        width: 358px; height: 416px; object-fit: cover; border-radius: 30px; display: block;
    }
    .cm-mega__col--image.cm-mega__col--image-wide img {
        width: 820px; height: 416px; border-radius: 30px;
    }

    .cm-mega__col--cards { display: flex; flex-direction: column; gap: 16px; align-self: start; }
    .cm-mega__card {
        display: flex; flex-direction: column; height: 200px; background: #E1F5DF;
        border-radius: 40px; padding: 24px 28px; text-decoration: none;
        color: #1a1a1a; position: relative; transition: background .2s; box-sizing: border-box;
    }
    .cm-mega__card:hover { background: #d4edcf; color: #1a1a1a; }
    .cm-mega__card-title { display: block; font-size: 20px; font-weight: 600; margin-bottom: 8px; line-height: 1.3; }
    .cm-mega__card-desc { display: block; font-size: 15px; color: #555; line-height: 1.4; }
    .cm-mega__card-arrow {
        position: absolute; bottom: 16px; left: 16px; width: 36px; height: 36px;
        background: #fff; border-radius: 50%; display: flex; align-items: center;
        justify-content: center; color: #1a1a1a; transform: scaleX(-1);
    }

    /* ===== Laptop (Elementor breakpoint) ===== */
    @media (max-width: 1500px) {
        .cm-header__inner {
            height: 72px;
            padding: 0 20px;
            gap: 16px;
            border-radius: 50px;
        }

        .cm-header__logo img { height: 36px; }

        .cm-header__menu { gap: 28px; }
        .cm-header__menu a { font-size: 15px; }

        .cm-header__actions { gap: 8px; }
        .cm-header__cta { font-size: 14px; padding: 7px 18px; }

        .cm-header__icon-btn--phone {
            width: 36px !important; height: 36px !important;
        }
        .cm-header__icon-btn--phone::before {
            width: 26px; height: 26px;
        }
        .cm-header__icon-btn--phone:hover::before,
        .cm-header__icon-btn--phone.is-active::before {
            width: 36px; height: 36px;
        }

        .cm-mega.is-open { max-height: 380px; margin-top: 6px; }

        .cm-mega__inner {
            grid-template-columns: 1.1fr 1fr 240px 1fr;
            gap: 28px;
            padding: 28px 32px;
            border-radius: 44px;
        }

        .cm-mega__heading { font-size: 30px; }
        .cm-mega__section-title { font-size: 18px; }

        .cm-mega__col--links { gap: 18px; }
        .cm-mega__link-name, .cm-mega__link-title { font-size: 15px; }
        .cm-mega__link-sub, .cm-mega__link-desc { font-size: 13px; }

        .cm-mega__col--image img {
            width: 240px; height: 300px;
        }
        .cm-mega__col--image.cm-mega__col--image-wide img {
            width: 100%; height: 300px;
        }

        .cm-mega__col--cards { gap: 10px; }
        .cm-mega__card {
            height: 145px;
            border-radius: 28px;
            padding: 16px 20px;
        }
        .cm-mega__card-title { font-size: 15px; margin-bottom: 4px; }
        .cm-mega__card-desc { font-size: 12px; }
        .cm-mega__card-arrow { width: 28px; height: 28px; bottom: 12px; left: 12px; }

        .cm-mega__link-group--contact { gap: 16px; }
        .cm-mega__link-group--sales { margin-top: 10px; }
    }

    /* ===== Mobile ===== */
    @media (max-width: 960px) {
        .cm-mega { display: none !important; }

        #cm-header { padding: 4px 0; }

        .cm-header__inner {
            width: 97%;
            border-radius: 30px;
            height: 60px;
            padding: 0 16px;
            gap: 6px;
            position: relative;
        }

        .cm-header__logo {
            margin-left: auto;
        }
        .cm-header__cta {
            font-size: 12px !important;
            padding: 8px 18px !important;
        }
        #cm-header.mob-menu-open .cm-header__inner {
            border-radius: 30px 30px 0 0;
        }

        .cm-header__burger {
            display: flex;
            width: 44px; height: 44px;
            align-items: center; justify-content: center;
            background: #F2F5FA !important;
            border-radius: 50%;
            padding: 0;
            flex-shrink: 0;
            gap: 2px !important;
        }

        .cm-header__nav {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
            background: #fff;
            border-radius: 0 0 30px 30px;
            box-shadow: 0 8px 24px rgba(0,0,0,.08);
            flex-direction: column;
            overflow-y: auto;
            max-height: 80vh;
            pointer-events: auto;
            z-index: 99998;
        }
        #cm-header.mob-menu-open .cm-header__nav {
            display: flex;
        }

        .cm-header__actions { flex-shrink: 0; }
        .cm-header__actions .cm-header__icon-btn,
        .cm-header__actions .cm-header__divider {
            display: none !important;
        }

        .cm-header__menu {
            flex-direction: column; gap: 0; padding: 0; margin: 0;
        }
        .cm-header__menu > li {
            border-top: 1px solid #E4E8F2;
            position: relative;
        }
        .cm-header__menu > li > a {
            display: flex; align-items: center;
            padding: 20px 24px; font-size: 20px; font-weight: 400;
            color: #1a1a1a !important; white-space: normal;
        }
        .cm-header__menu > li.mob-open > a {
            font-weight: 600;
            color: #1a1a1a !important;
        }

        /* Chevron */
        .cm-header__menu-item.has-mega > a::after {
            content: '';
            width: 10px; height: 10px;
            border-left: 2px solid #1a1a1a;
            border-bottom: 2px solid #1a1a1a;
            transform: rotate(-45deg);
            position: absolute;
            left: 24px; top: 26px;
            transition: transform .3s;
        }
        .cm-header__menu-item.has-mega.mob-open > a::after {
            transform: rotate(135deg);
        }
        .cm-header__menu > li:not(.has-mega) > a::after {
            content: '';
            width: 10px; height: 10px;
            border-left: 2px solid #1a1a1a;
            border-bottom: 2px solid #1a1a1a;
            transform: rotate(-45deg);
            position: absolute;
            left: 24px; top: 26px;
        }

        /* Mobile sub-links */
        .cm-mobile-sub {
            display: none;
            flex-direction: column;
            padding: 0 24px 16px;
        }
        .mob-open .cm-mobile-sub { display: flex; }
        .cm-mobile-sub a {
            text-decoration: none; color: #1a1a1a;
            font-size: 22px; font-weight: 600; padding: 12px 0;
        }

        /* Mobile icon rows */
        .cm-mobile-icons { display: flex; flex-direction: column; }
        .cm-mobile-icon-row {
            display: flex; align-items: center; justify-content: space-between;
            padding: 20px 24px; border-top: 1px solid #E4E8F2;
            position: relative; flex-wrap: wrap; cursor: pointer;
        }
        .cm-mobile-arrow {
            width: 10px; height: 10px;
            border-left: 2px solid #1a1a1a;
            border-bottom: 2px solid #1a1a1a;
            transform: rotate(-45deg);
            transition: transform .3s;
            position: absolute;
            left: 24px; top: 26px;
        }
        .cm-mobile-icon-row.mob-open .cm-mobile-arrow {
            transform: rotate(135deg);
        }

        .cm-mobile-icon-sub {
            display: none;
            flex-direction: column;
            width: 100%;
            padding: 8px 0 4px;
            gap: 2px;
        }
        .cm-mobile-icon-row.mob-open .cm-mobile-icon-sub {
            display: flex;
        }
        .cm-mobile-icon-sub__title {
            font-size: 18px; font-weight: 600; color: #1a1a1a; margin-bottom: 2px;
        }
        .cm-mobile-icon-sub__label {
            font-size: 18px; font-weight: 600; color: #1a1a1a;
        }
        .cm-mobile-icon-sub__text {
            font-size: 16px; color: #555;
        }
        .cm-mobile-icon-sub a {
            font-size: 16px; color: #1a1a1a; text-decoration: none;
        }
    }

CSS;

    wp_register_style( 'custom-snippets-header', false );
    wp_enqueue_style( 'custom-snippets-header' );
    wp_add_inline_style( 'custom-snippets-header', $css );
}
