<?php
/**
 * @file
 * Template for the default layout - ATL LAB
 */
?>
<a href="#main-content" class="skip-link"><?php print t('Skip to main content'); ?></a>

<div class="layout--default <?php print implode(' ', $classes); ?>" <?php print backdrop_attributes($attributes); ?>>

    <!-- Animated Background -->
    <div class="hero-bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Header -->
    <header class="l-header" role="banner">
        <div class="container header-inner">
            <a href="<?php print $front_page; ?>" class="site-logo" title="<?php print t('Home'); ?>">
                ATL <span>LAB</span>
            </a>

            <nav class="header-nav">
                <a href="#">Our Work</a>
                <a href="#">About Us</a>
                <a href="#">Our Services</a>
                <a href="#">Sectors</a>
                <a href="#">Contact</a>
            </nav>

            <div class="header-actions">
                <a href="#" class="btn-cta">Let's Talk</a>
                <button class="mobile-menu-toggle" aria-label="Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Homepage Hero Section -->
    <?php if (backdrop_is_front_page()): ?>
        <section class="hero-section">
            <div class="container hero-content">
                <h1 class="hero-title">Designing mobile-first digital experiences that scale.</h1>
                <p class="hero-subtitle">
                    ATL LAB is a technology and design studio specializing in mobile UX/UI,
                    responsive web design, and scalable digital platforms.
                </p>
                <div class="hero-cta-group">
                    <a href="#" class="btn">Our Work</a>
                    <a href="#" class="btn">Our Services</a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Main Content -->
    <main id="main-content" role="main">
        <div class="container">
            <?php if ($messages): ?>
                <div class="l-messages" role="status">
                    <?php print $messages; ?>
                </div>
            <?php endif; ?>

            <?php if (!backdrop_is_front_page()): ?>
                <?php if ($tabs): ?>
                    <nav class="tabs" role="tablist">
                        <?php print $tabs; ?>
                    </nav>
                <?php endif; ?>

                <div class="l-content">
                    <?php if ($title): ?>
                        <h1 class="page-title"><?php print $title; ?></h1>
                    <?php endif; ?>
                    <?php print $content['content']; ?>
                </div>
            <?php else: ?>
                <!-- Render main content hidden or minimal on home if mostly hardcoded, 
                     but keeping it for system blocks is good practice -->
                <?php // print $content['content']; ?>
            <?php endif; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="l-footer" role="contentinfo">
        <div class="container">
            <?php if ($content['footer']): ?>
                <?php print $content['footer']; ?>
            <?php endif; ?>
            <p class="copyright">
                <?php print t('© @year ATL LAB. All rights reserved.', array('@year' => date('Y'))); ?>
            </p>
        </div>
    </footer>

</div><!-- /.layout--default -->