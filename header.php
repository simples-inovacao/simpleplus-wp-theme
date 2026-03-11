<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
        <div class="container-tight flex items-center justify-between h-16 md:h-20">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo-DxVX319K.png" alt="Simple Plus"
                    class="h-8 md:h-10 w-auto" />
            </a>

            <!-- Desktop nav -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">Home</a>
                <a href="#services"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">Services</a>
                <a href="#cases"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">Cases</a>
                <a href="#about"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">About</a>
                <a href="#insights"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">Insights</a>
                <a href="#contact"
                    class="text-sm text-primary-foreground/70 hover:text-primary-foreground transition-colors font-medium">Contact</a>
            </nav>

            <div class="hidden lg:block">
                <a href="#contact"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-10 px-4 py-2 bg-brand-aqua text-brand-charcoal hover:bg-brand-aqua/90 font-semibold hero-button-glow">
                    Book a Strategy Call
                </a>
            </div>

            <!-- Mobile toggle -->
            <button id="mobile-toggle" class="lg:hidden text-primary-foreground" aria-label="Toggle menu">
                <!-- Menu Icon -->
                <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="block">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
                <!-- Close Icon -->
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="hidden">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu"
            class="hidden lg:hidden bg-brand-charcoal/95 backdrop-blur-xl border-t border-primary-foreground/5">
            <div class="container-tight py-6 flex flex-col gap-4">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">Home</a>
                <a href="#services"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">Services</a>
                <a href="#cases"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">Cases</a>
                <a href="#about"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">About</a>
                <a href="#insights"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">Insights</a>
                <a href="#contact"
                    class="text-base text-primary-foreground/80 hover:text-primary-foreground py-2 font-medium mobile-link">Contact</a>
                <a href="#contact"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-11 px-8 bg-brand-aqua text-brand-charcoal hover:bg-brand-aqua/90 font-semibold hero-button-glow mt-2 w-full mobile-link">
                    Book a Strategy Call
                </a>
            </div>
        </div>
    </header>
