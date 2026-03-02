<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_body_open', 'custom_snippets_accordion' );
add_action( 'wp_enqueue_scripts', 'custom_snippets_accordion_styles' );

function custom_snippets_accordion() {
    // Пример данных для аккордеона (в реальном проекте данные могут приходить из ACF или других источников)
    $accordion_items = array(
        array(
            'title' => 'Что такое солнечная энергия?',
            'content' => 'Солнечная энергия - это возобновляемый источник энергии, получаемый от солнца через фотоэлектрические панели или солнечные коллекторы. Это чистая и экологичная альтернатива традиционным источникам энергии.'
        ),
        array(
            'title' => 'Как работает солнечная система?',
            'content' => 'Солнечная система состоит из солнечных панелей, инвертора и системы хранения энергии. Панели преобразуют солнечный свет в электричество, инвертор преобразует постоянный ток в переменный, а батареи хранят энергию для использования в ночное время или в пасмурную погоду.'
        ),
        array(
            'title' => 'Преимущества солнечной энергии',
            'content' => 'Солнечная энергия имеет множество преимуществ: она бесплатна после установки, экологична, снижает счета за электроэнергию, повышает стоимость недвижимости и предоставляет энергетическую независимость.'
        ),
        array(
            'title' => 'Финансирование и возврат инвестиций',
            'content' => 'Мы предлагаем различные варианты финансирования солнечных систем, включая лизинг, кредиты и программы субсидирования. В среднем, инвестиции окупаются в течение 5-7 лет благодаря экономии на электроэнергии.'
        ),
        array(
            'title' => 'Техническая поддержка и обслуживание',
            'content' => 'Мы предоставляем полную техническую поддержку и регулярное обслуживание солнечных систем. Наши специалисты проводят ежегодные проверки и обеспечивают бесперебойную работу оборудования.'
        )
    );
    ?>
    <section class="cm-accordion-section">
        <div class="cm-accordion-container">
            <div class="cm-accordion-header">
                <h2 class="cm-accordion-title">Часто задаваемые вопросы</h2>
                <p class="cm-accordion-subtitle">Получите ответы на самые популярные вопросы о солнечной энергии</p>
            </div>

            <div class="cm-accordion-wrapper">
                <?php foreach ( $accordion_items as $index => $item ) : ?>
                    <div class="cm-accordion-item" data-accordion-item="<?php echo $index; ?>">
                        <button class="cm-accordion-trigger" aria-expanded="false" aria-controls="accordion-content-<?php echo $index; ?>">
                            <span class="cm-accordion-trigger-text"><?php echo esc_html( $item['title'] ); ?></span>
                            <span class="cm-accordion-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6,9 12,15 18,9"></polyline>
                                </svg>
                            </span>
                        </button>
                        <div class="cm-accordion-content" id="accordion-content-<?php echo $index; ?>" aria-labelledby="accordion-trigger-<?php echo $index; ?>">
                            <div class="cm-accordion-content-inner">
                                <?php echo wp_kses_post( $item['content'] ); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
    (function() {
        'use strict';

        // Accordion functionality
        function initAccordion() {
            const accordionItems = document.querySelectorAll('.cm-accordion-item');

            accordionItems.forEach(function(item) {
                const trigger = item.querySelector('.cm-accordion-trigger');
                const content = item.querySelector('.cm-accordion-content');
                const icon = item.querySelector('.cm-accordion-icon');

                trigger.addEventListener('click', function(e) {
                    e.preventDefault();

                    const isExpanded = trigger.getAttribute('aria-expanded') === 'true';

                    // Close all other items
                    accordionItems.forEach(function(otherItem) {
                        if (otherItem !== item) {
                            const otherTrigger = otherItem.querySelector('.cm-accordion-trigger');
                            const otherContent = otherItem.querySelector('.cm-accordion-content');
                            const otherIcon = otherItem.querySelector('.cm-accordion-icon');

                            otherTrigger.setAttribute('aria-expanded', 'false');
                            otherContent.style.maxHeight = null;
                            otherItem.classList.remove('is-open');
                        }
                    });

                    // Toggle current item
                    if (isExpanded) {
                        trigger.setAttribute('aria-expanded', 'false');
                        content.style.maxHeight = null;
                        item.classList.remove('is-open');
                    } else {
                        trigger.setAttribute('aria-expanded', 'true');
                        content.style.maxHeight = content.scrollHeight + 'px';
                        item.classList.add('is-open');
                    }
                });
            });

            // Keyboard navigation
            accordionItems.forEach(function(item) {
                const trigger = item.querySelector('.cm-accordion-trigger');

                trigger.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        trigger.click();
                    }

                    // Arrow key navigation
                    const currentIndex = Array.from(accordionItems).indexOf(item);

                    if (e.key === 'ArrowDown') {
                        e.preventDefault();
                        const nextIndex = (currentIndex + 1) % accordionItems.length;
                        accordionItems[nextIndex].querySelector('.cm-accordion-trigger').focus();
                    } else if (e.key === 'ArrowUp') {
                        e.preventDefault();
                        const prevIndex = currentIndex === 0 ? accordionItems.length - 1 : currentIndex - 1;
                        accordionItems[prevIndex].querySelector('.cm-accordion-trigger').focus();
                    } else if (e.key === 'Home') {
                        e.preventDefault();
                        accordionItems[0].querySelector('.cm-accordion-trigger').focus();
                    } else if (e.key === 'End') {
                        e.preventDefault();
                        accordionItems[accordionItems.length - 1].querySelector('.cm-accordion-trigger').focus();
                    }
                });
            });
        }

        // Initialize accordion when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAccordion);
        } else {
            initAccordion();
        }

        // Re-initialize on window resize (in case of responsive changes)
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Recalculate max-height for open items
                document.querySelectorAll('.cm-accordion-item.is-open .cm-accordion-content').forEach(function(content) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                });
            }, 250);
        });
    })();
    </script>
    <?php
}

function custom_snippets_accordion_styles() {
    $css = <<<CSS
    /* ===== Accordion Section ===== */
    .cm-accordion-section {
        padding: 80px 0;
        background: #f8f9fa;
        font-family: 'Ploni', 'Assistant', 'Heebo', Arial, sans-serif;
        direction: rtl;
    }

    .cm-accordion-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .cm-accordion-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .cm-accordion-title {
        font-size: 42px;
        font-weight: 500;
        color: #1a1a1a;
        margin: 0 0 16px 0;
        line-height: 1.2;
    }

    .cm-accordion-subtitle {
        font-size: 18px;
        color: #666;
        margin: 0;
        max-width: 600px;
        margin: 0 auto;
    }

    /* ===== Accordion Items ===== */
    .cm-accordion-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }

    .cm-accordion-item {
        background: #fff;
        border-radius: 16px;
        margin-bottom: 16px;
        box-shadow: 0 2px 8px rgba(0,0,0,.06);
        overflow: hidden;
        transition: box-shadow .2s ease;
    }

    .cm-accordion-item:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,.1);
    }

    .cm-accordion-item.is-open {
        box-shadow: 0 4px 20px rgba(0,0,0,.12);
    }

    .cm-accordion-trigger {
        width: 100%;
        background: none;
        border: none;
        padding: 24px 32px;
        text-align: right;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 20px;
        font-weight: 600;
        color: #1a1a1a;
        transition: background-color .2s ease;
        outline: none;
    }

    .cm-accordion-trigger:hover,
    .cm-accordion-trigger:focus {
        background-color: #f8f9fa;
    }

    .cm-accordion-trigger-text {
        flex: 1;
        text-align: right;
    }

    .cm-accordion-icon {
        flex-shrink: 0;
        margin-left: 16px;
        transition: transform .3s ease;
        color: #1a1a1a;
    }

    .cm-accordion-item.is-open .cm-accordion-icon {
        transform: rotate(180deg);
    }

    .cm-accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height .4s ease;
        background: #f8f9fa;
    }

    .cm-accordion-content-inner {
        padding: 0 32px 32px;
        font-size: 18px;
        line-height: 1.6;
        color: #555;
    }

    /* ===== Focus States ===== */
    .cm-accordion-trigger:focus-visible {
        outline: 2px solid #42B563;
        outline-offset: 2px;
    }

    /* ===== Responsive Design ===== */
    @media (max-width: 768px) {
        .cm-accordion-section {
            padding: 60px 0;
        }

        .cm-accordion-container {
            padding: 0 16px;
        }

        .cm-accordion-header {
            margin-bottom: 40px;
        }

        .cm-accordion-title {
            font-size: 32px;
        }

        .cm-accordion-subtitle {
            font-size: 16px;
        }

        .cm-accordion-trigger {
            padding: 20px 24px;
            font-size: 18px;
        }

        .cm-accordion-content-inner {
            padding: 0 24px 24px;
            font-size: 16px;
        }

        .cm-accordion-icon {
            margin-left: 12px;
        }
    }

    @media (max-width: 480px) {
        .cm-accordion-section {
            padding: 40px 0;
        }

        .cm-accordion-title {
            font-size: 28px;
        }

        .cm-accordion-trigger {
            padding: 16px 20px;
            font-size: 16px;
        }

        .cm-accordion-content-inner {
            padding: 0 20px 20px;
            font-size: 15px;
        }
    }

    /* ===== Animation ===== */
    .cm-accordion-content {
        animation: slideDown 0.4s ease-out;
    }

    .cm-accordion-item.is-open .cm-accordion-content {
        animation: slideUp 0.4s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

CSS;

    wp_register_style( 'custom-snippets-accordion', false );
    wp_enqueue_style( 'custom-snippets-accordion' );
    wp_add_inline_style( 'custom-snippets-accordion', $css );
}
?>