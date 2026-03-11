<?php
/**
 * The front page template file
 */

get_header(); ?>

<main>

    <!-- Hero Section -->
    <section class="relative bg-brand-charcoal overflow-hidden pt-28 pb-20 md:pt-36 md:pb-28 lg:pt-40 lg:pb-32">
        <!-- Subtle gradient orbs -->
        <div
            class="absolute top-0 right-0 w-[600px] h-[600px] rounded-full bg-primary/10 blur-[120px] -translate-y-1/2 translate-x-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-brand-aqua/8 blur-[100px] translate-y-1/2 -translate-x-1/4">
        </div>

        <div class="container-tight relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Left column -->
                <div class="anim-fade-in-up">
                    <span
                        class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-sparkles">
                            <path
                                d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                        </svg>
                        Digital Growth Partner
                    </span>

                    <h1
                        class="text-4xl md:text-5xl lg:text-[3.5rem] font-extrabold leading-[1.1] tracking-tight text-primary-foreground mb-6">
                        We build, optimize, and scale <span class="text-gradient-purple">digital businesses.</span>
                    </h1>

                    <p class="text-lg text-brand-cool-gray leading-relaxed max-w-xl mb-8">
                        From Shopify and VTEX to SEO, paid media, marketplaces, and B2B strategy — Simple Plus acts as
                        your growth partner, connecting marketing, commerce, and business intelligence to drive
                        measurable results.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-10">
                        <a href="#contact"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-14 rounded-md px-10 text-base bg-brand-aqua text-brand-charcoal hover:bg-brand-aqua/90 font-semibold hero-button-glow">
                            Book a Strategy Call
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-2 mt-[2px] lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#cases"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-14 rounded-md px-10 text-base border-2 border-primary-foreground/20 text-primary-foreground hover:bg-primary-foreground hover:text-brand-charcoal font-semibold">
                            See Success Cases
                        </a>
                    </div>

                    <!-- Trust row -->
                    <div class="flex flex-wrap gap-4 mb-8">
                        <span
                            class="inline-flex items-center gap-2 text-xs font-semibold text-primary-foreground/60 bg-primary-foreground/5 rounded-full px-4 py-2 border border-primary-foreground/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shield-check">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                            Shopify Experts
                        </span>
                        <span
                            class="inline-flex items-center gap-2 text-xs font-semibold text-primary-foreground/60 bg-primary-foreground/5 rounded-full px-4 py-2 border border-primary-foreground/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                            </svg>
                            VTEX Partners
                        </span>
                        <span
                            class="inline-flex items-center gap-2 text-xs font-semibold text-primary-foreground/60 bg-primary-foreground/5 rounded-full px-4 py-2 border border-primary-foreground/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-sparkles">
                                <path
                                    d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                            </svg>
                            AI-powered systems
                        </span>
                    </div>

                    <!-- Metrics -->
                    <div class="flex gap-8 md:gap-12">
                        <div>
                            <div class="text-2xl font-extrabold text-primary-foreground">2,500+</div>
                            <div class="text-xs text-brand-cool-gray mt-1">Brands</div>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-primary-foreground">Revenue</div>
                            <div class="text-xs text-brand-cool-gray mt-1">Growth Focus</div>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-primary-foreground">Expert</div>
                            <div class="text-xs text-brand-cool-gray mt-1">Marketplace & Perf.</div>
                        </div>
                    </div>
                </div>

                <!-- Right column -->
                <div class="hidden lg:block anim-slide-right anim-delay-hero-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-dashboard-iG_XJb-V.png"
                        alt="Digital growth dashboard" class="w-full rounded-2xl shadow-2xl" loading="eager" />
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar Section -->
    <section class="bg-soft-white section-padding">
        <div class="container-tight">
            <!-- SectionHeading equivalent -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12]">
                    Trusted by brands ready to grow smarter</h2>
            </div>

            <div class="overflow-hidden">
                <div class="flex animate-logo-scroll gap-16 w-max">
                    <?php
                    $logos = ["Bialetti", "Marvel", "Arno", "Uncle K", "Clube de Regatas Flamengo", "Fluminense Football Club", "Andrea Marques"];
                    $scroll_logos = array_merge($logos, $logos); // Double up for smooth infinite row scrolling
                    foreach ($scroll_logos as $name):
                        ?>
                        <div
                            class="flex items-center justify-center min-w-[120px] h-12 text-brand-cool-gray font-heading font-semibold text-base opacity-50 hover:opacity-100 transition-opacity select-none">
                            <?php echo esc_html($name); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition Section -->
    <section class="bg-card section-padding">
        <div class="container-tight">
            <!-- SectionHeading equivalent -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-blue mb-4">Why Simple
                    Plus</span>
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12] mb-6">
                    More than an agency. More than consulting. A growth structure for your business.</h2>
                <p class="text-lg text-muted-foreground leading-relaxed">We combine strategic thinking, hands-on
                    execution, and continuous optimization to help brands grow with more clarity, efficiency, and
                    profit.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div
                    class="group bg-background rounded-2xl p-7 border border-border hover:border-brand-aqua/40 hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-1">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-primary-foreground transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-brain">
                            <path
                                d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                            <path
                                d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z" />
                            <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4" />
                            <path d="M17.599 6.5a3 3 0 0 0 .399-1.375" />
                            <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5" />
                            <path d="M3.477 10.896a4 4 0 0 1 .585-.396" />
                            <path d="M19.938 10.5a4 4 0 0 1 .585.396" />
                            <path d="M6 18a4 4 0 0 1-1.967-.516" />
                            <path d="M19.967 17.484A4 4 0 0 1 18 18" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-3 text-foreground">Business Thinking</h3>
                    <p class="text-sm leading-relaxed text-muted-foreground">Strategic vision that connects digital
                        execution to real business outcomes and profitability.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-background rounded-2xl p-7 border border-border hover:border-brand-aqua/40 hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-2">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-primary-foreground transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-rocket">
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
                            <path
                                d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" />
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-3 text-foreground">Execution Capacity</h3>
                    <p class="text-sm leading-relaxed text-muted-foreground">From strategy to implementation — our team
                        delivers across every channel and platform.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="group bg-background rounded-2xl p-7 border border-border hover:border-brand-aqua/40 hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-3">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-primary-foreground transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-bar-chart-3">
                            <path d="M3 3v18h18" />
                            <path d="M18 17V9" />
                            <path d="M13 17V5" />
                            <path d="M8 17v-3" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-3 text-foreground">Performance Driven</h3>
                    <p class="text-sm leading-relaxed text-muted-foreground">Every decision is backed by data. We
                        measure, optimize, and scale what works.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="group bg-background rounded-2xl p-7 border border-border hover:border-brand-aqua/40 hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-5 group-hover:bg-primary group-hover:text-primary-foreground transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-handshake">
                            <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                            <path
                                d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                            <path d="m21 3-6 6" />
                            <path
                                d="m8.38 6.2-2.5 2.5a1 1 0 1 0 3 3l3.88-3.88a3 3 0 0 0 4.24 0l.88-.88a1 1 0 1 1 3 3l-2.81 2.81a5.79 5.79 0 0 1-7.06.87l-.47-.28a2 2 0 0 0-1.42-.25L3 21" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-3 text-foreground">Long-Term Partnership</h3>
                    <p class="text-sm leading-relaxed text-muted-foreground">We grow with you. Not a vendor — a
                        committed partner invested in your success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-soft-white section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <span
                    class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-blue mb-4">Services</span>
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12] mb-6">
                    A complete digital growth ecosystem</h2>
                <p class="text-lg text-muted-foreground leading-relaxed">Integrated services designed to support every
                    stage of your digital operation.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-1">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shopping-cart">
                            <circle cx="8" cy="21" r="1" />
                            <circle cx="19" cy="21" r="1" />
                            <path
                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">Commerce Platforms</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">End-to-end e-commerce development and
                        optimization.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Shopify
                            Development</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Shopify
                            Optimization</span>
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">VTEX
                            Solutions</span>
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">CRO
                            / UX</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Service 2 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-2">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-megaphone">
                            <path d="m3 11 18-5v12L3 14v-3z" />
                            <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">Performance Marketing</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">Data-driven campaigns that maximize
                        ROAS and revenue.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Ads
                            Management</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Campaign
                            Optimization</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Creative
                            Strategy</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Funnel
                            Performance</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Service 3 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-3">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-search">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">Organic Growth</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">Sustainable traffic and visibility
                        through search.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">SEO
                            Management</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Technical
                            SEO</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Content
                            Strategy</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">AEO</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Service 4 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-4">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-store">
                            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7" />
                            <path d="M4 12v8a2 2 0 0 0 2 2h2V14h8v8h2a2 2 0 0 0 2-2v-8" />
                            <path
                                d="M2 13.5A2.5 2.5 0 0 1 4.5 11h15a2.5 2.5 0 0 1 2.5 2.5v1.5a2.5 2.5 0 0 1-2.5 2.5h-15A2.5 2.5 0 0 1 2 15.5z" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">Marketplace Growth</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">Expand and optimize your marketplace
                        presence.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Marketplace
                            Management</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Listing
                            Optimization</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Pricing
                            Intelligence</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Operations</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Service 5 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-5">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">B2B & Sales Enablement</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">Pipeline strategy and commercial
                        support.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">CRM
                            Support</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Positioning</span>
                        <span class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Lead
                            Generation</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Commercial
                            Support</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Service 6 -->
                <div
                    class="group bg-card rounded-2xl p-7 border border-border hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-6">
                    <div
                        class="w-11 h-11 rounded-lg bg-brand-aqua/20 text-primary flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-pen-tool">
                            <path d="m12 19 7-7 3 3-7 7-3-3z" />
                            <path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                            <path d="m2 2 7.586 7.586" />
                            <circle cx="11" cy="11" r="2" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-lg mb-2 text-foreground">Content & Brand Presence</h3>
                    <p class="text-sm text-muted-foreground mb-4 leading-relaxed">Strategic content that builds
                        authority and trust.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Social
                            Media</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Editorial
                            Strategy</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Brand
                            Communication</span>
                        <span
                            class="text-xs bg-secondary text-muted-foreground rounded-full px-3 py-1 font-medium">Content
                            Production</span>
                    </div>
                    <a href="#contact"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        Explore service <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology Section -->
    <section class="bg-brand-charcoal section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center text-primary-foreground scroll-animate anim-fade-in-up">
                <span
                    class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-4">Methodology</span>
                <h2 class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight leading-[1.12] mb-6">How we
                    turn strategy into growth</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8 md:gap-6 relative">
                <!-- Desktop connector line -->
                <div
                    class="hidden md:block absolute top-16 left-[12.5%] right-[12.5%] h-px bg-gradient-to-r from-brand-aqua/30 via-primary/40 to-brand-aqua/30">
                </div>

                <!-- Step 1 -->
                <div class="relative text-center scroll-animate anim-fade-in-up anim-delay-1">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/20 text-brand-aqua flex items-center justify-center mx-auto mb-5 text-xl font-extrabold font-heading border border-primary/30">
                        01
                    </div>
                    <h3 class="font-heading font-bold text-lg text-primary-foreground mb-3">Diagnose</h3>
                    <p class="text-sm text-brand-cool-gray leading-relaxed">Deep analysis of your digital operation,
                        market position, and growth opportunities.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative text-center scroll-animate anim-fade-in-up anim-delay-2">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/20 text-brand-aqua flex items-center justify-center mx-auto mb-5 text-xl font-extrabold font-heading border border-primary/30">
                        02
                    </div>
                    <h3 class="font-heading font-bold text-lg text-primary-foreground mb-3">Structure</h3>
                    <p class="text-sm text-brand-cool-gray leading-relaxed">Build a tailored roadmap with clear
                        priorities, KPIs, and actionable milestones.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative text-center scroll-animate anim-fade-in-up anim-delay-3">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/20 text-brand-aqua flex items-center justify-center mx-auto mb-5 text-xl font-extrabold font-heading border border-primary/30">
                        03
                    </div>
                    <h3 class="font-heading font-bold text-lg text-primary-foreground mb-3">Execute</h3>
                    <p class="text-sm text-brand-cool-gray leading-relaxed">Hands-on implementation across platforms,
                        channels, and campaigns.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative text-center scroll-animate anim-fade-in-up anim-delay-4">
                    <div
                        class="w-14 h-14 rounded-2xl bg-primary/20 text-brand-aqua flex items-center justify-center mx-auto mb-5 text-xl font-extrabold font-heading border border-primary/30">
                        04
                    </div>
                    <h3 class="font-heading font-bold text-lg text-primary-foreground mb-3">Optimize</h3>
                    <p class="text-sm text-brand-cool-gray leading-relaxed">Continuous improvement powered by data,
                        testing, and strategic iteration.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section id="cases" class="bg-card section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-blue mb-4">Success
                    Cases</span>
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12]">
                    Real growth, backed by real numbers</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- Case 1 -->
                <div
                    class="group relative bg-background rounded-2xl border border-border overflow-hidden hover:shadow-2xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-1">
                    <div class="bg-brand-charcoal p-6 text-center">
                        <div class="inline-flex items-center gap-2 text-brand-aqua mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-up">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="text-xs font-semibold uppercase tracking-wider">Revenue Growth</span>
                        </div>
                        <div class="text-5xl font-extrabold font-heading text-primary-foreground">+300%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading font-bold text-base text-foreground mb-1">Fashion E-commerce</h3>
                        <div class="space-y-3 mt-4">
                            <div>
                                <span class="text-xs font-bold text-primary uppercase tracking-wider">Challenge</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">Stagnant online revenue
                                    despite significant ad spend across multiple channels.</p>
                            </div>
                            <div>
                                <span
                                    class="text-xs font-bold text-brand-aqua-hover uppercase tracking-wider">Solution</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">Full Shopify rebuild with
                                    CRO optimization, restructured paid media funnels, and performance SEO.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 2 -->
                <div
                    class="group relative bg-background rounded-2xl border border-border overflow-hidden hover:shadow-2xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-2">
                    <div class="bg-brand-charcoal p-6 text-center">
                        <div class="inline-flex items-center gap-2 text-brand-aqua mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-up">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="text-xs font-semibold uppercase tracking-wider">Qualified Leads</span>
                        </div>
                        <div class="text-5xl font-extrabold font-heading text-primary-foreground">+190%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading font-bold text-base text-foreground mb-1">B2B SaaS Platform</h3>
                        <div class="space-y-3 mt-4">
                            <div>
                                <span class="text-xs font-bold text-primary uppercase tracking-wider">Challenge</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">Low lead quality and poor
                                    conversion rates from digital channels.</p>
                            </div>
                            <div>
                                <span
                                    class="text-xs font-bold text-brand-aqua-hover uppercase tracking-wider">Solution</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">B2B positioning strategy,
                                    CRM implementation, content-driven SEO, and targeted paid campaigns.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 3 -->
                <div
                    class="group relative bg-background rounded-2xl border border-border overflow-hidden hover:shadow-2xl transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-3">
                    <div class="bg-brand-charcoal p-6 text-center">
                        <div class="inline-flex items-center gap-2 text-brand-aqua mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-up">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="text-xs font-semibold uppercase tracking-wider">E-commerce Growth</span>
                        </div>
                        <div class="text-5xl font-extrabold font-heading text-primary-foreground">+177%</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-heading font-bold text-base text-foreground mb-1">Marketplace Retailer</h3>
                        <div class="space-y-3 mt-4">
                            <div>
                                <span class="text-xs font-bold text-primary uppercase tracking-wider">Challenge</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">Underperforming
                                    marketplace listings and declining share of voice.</p>
                            </div>
                            <div>
                                <span
                                    class="text-xs font-bold text-brand-aqua-hover uppercase tracking-wider">Solution</span>
                                <p class="text-sm text-muted-foreground mt-1 leading-relaxed">Marketplace optimization,
                                    pricing intelligence, listing strategy, and cross-channel integration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#cases"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-11 px-8 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground font-semibold">
                    View All Cases <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-2 mt-[2px] lucide lucide-arrow-right">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Differentiators Section -->
    <section class="bg-soft-white section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-blue mb-4">Why
                    Us</span>
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12]">
                    Why brands choose Simple Plus</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-5 max-w-3xl mx-auto scroll-animate anim-fade-in-up anim-delay-1">
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">Strategic and operational partnership</span>
                </div>
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">Business-first mindset</span>
                </div>
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">Focus on profitable growth</span>
                </div>
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">AI-powered optimization</span>
                </div>
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">Shopify and VTEX expertise</span>
                </div>
                <div class="flex items-start gap-4 bg-card rounded-xl p-5 border border-border">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-aqua/20 text-primary flex items-center justify-center shrink-0 mt-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-check">
                            <path d="M20 6 9 17l-5-5" />
                        </svg>
                    </div>
                    <span class="text-foreground font-medium">Tailored plans, not generic retainers</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section id="about" class="bg-brand-charcoal section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center text-primary-foreground scroll-animate anim-fade-in-up">
                <span
                    class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-4">About</span>
                <h2 class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight leading-[1.12]">Built by
                    people who understand growth from the inside</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center max-w-4xl mx-auto scroll-animate anim-fade-in-up anim-delay-1">
                <!-- Placeholder portrait -->
                <div
                    class="aspect-[4/5] rounded-2xl bg-brand-graphite border border-primary-foreground/10 flex items-center justify-center">
                    <span class="text-brand-cool-gray text-sm font-heading">Leadership Portrait</span>
                </div>

                <div>
                    <p class="text-brand-cool-gray leading-relaxed mb-8 text-lg">
                        Simple Plus was founded by operators who've built and scaled digital businesses across Latin
                        America and the U.S. Our leadership team brings deep expertise in commerce, marketing, and
                        technology — ensuring every partnership is driven by real business understanding, not just
                        deliverables.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <div
                            class="inline-flex items-center gap-2 text-sm text-primary-foreground/70 bg-primary-foreground/5 border border-primary-foreground/10 rounded-full px-4 py-2 font-medium">
                            <span class="text-brand-aqua"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                </svg></span>
                            Shopify Experts Certified
                        </div>
                        <div
                            class="inline-flex items-center gap-2 text-sm text-primary-foreground/70 bg-primary-foreground/5 border border-primary-foreground/10 rounded-full px-4 py-2 font-medium">
                            <span class="text-brand-aqua"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg></span>
                            VTEX Official Partner
                        </div>
                        <div
                            class="inline-flex items-center gap-2 text-sm text-primary-foreground/70 bg-primary-foreground/5 border border-primary-foreground/10 rounded-full px-4 py-2 font-medium">
                            <span class="text-brand-aqua"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg></span>
                            Google Partner
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insights Section -->
    <section id="insights" class="bg-card section-padding">
        <div class="container-tight">
            <!-- SectionHeading -->
            <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
                <span
                    class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-blue mb-4">Insights</span>
                <h2
                    class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold tracking-tight text-foreground leading-[1.12]">
                    Insights for brands that want to grow better</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- Article 1 -->
                <article
                    class="group bg-background rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-1">
                    <div class="h-40 bg-secondary flex items-center justify-center">
                        <span class="text-muted-foreground text-sm font-heading">Article Image</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">Shopify</span>
                        <h3
                            class="font-heading font-bold text-base mt-2 mb-3 text-foreground group-hover:text-primary transition-colors">
                            How to scale a Shopify store with better margins
                        </h3>
                        <p class="text-sm text-muted-foreground leading-relaxed mb-4">Learn the frameworks top DTC
                            brands use to grow revenue while protecting profitability across channels.</p>
                        <a href="#insights"
                            class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                            Read more <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article
                    class="group bg-background rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-2">
                    <div class="h-40 bg-secondary flex items-center justify-center">
                        <span class="text-muted-foreground text-sm font-heading">Article Image</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">SEO</span>
                        <h3
                            class="font-heading font-bold text-base mt-2 mb-3 text-foreground group-hover:text-primary transition-colors">
                            The real role of SEO in e-commerce growth
                        </h3>
                        <p class="text-sm text-muted-foreground leading-relaxed mb-4">Why organic search remains the
                            highest-ROI channel and how to build a sustainable SEO engine.</p>
                        <a href="#insights"
                            class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                            Read more <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article
                    class="group bg-background rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up anim-delay-3">
                    <div class="h-40 bg-secondary flex items-center justify-center">
                        <span class="text-muted-foreground text-sm font-heading">Article Image</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider">Marketplaces</span>
                        <h3
                            class="font-heading font-bold text-base mt-2 mb-3 text-foreground group-hover:text-primary transition-colors">
                            Marketplace pricing mistakes brands still make
                        </h3>
                        <p class="text-sm text-muted-foreground leading-relaxed mb-4">Common pricing pitfalls that erode
                            margins and how to build a smarter pricing strategy.</p>
                        <a href="#insights"
                            class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                            Read more <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            <div class="text-center">
                <a href="#insights"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-11 px-8 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground font-semibold">
                    Explore Insights <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-2 mt-[2px] lucide lucide-arrow-right">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Contact Section -->
    <section id="contact" class="bg-brand-charcoal section-padding">
        <div class="container-tight">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left -->
                <div class="scroll-animate anim-fade-in-up">
                    <span class="inline-block mb-4 text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua">
                        Get Started
                    </span>
                    <h2
                        class="text-3xl md:text-4xl font-bold leading-tight tracking-tight text-primary-foreground mb-5">
                        Let's map your next stage of growth
                    </h2>
                    <p class="text-lg text-brand-cool-gray leading-relaxed mb-8">
                        Whether you need a stronger store, better acquisition, smarter SEO, or a more integrated digital
                        operation, we can help you identify the right path.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-aqua/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-brand-aqua lucide lucide-check">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </div>
                            <span class="text-primary-foreground/80 font-medium">Strategic diagnosis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-aqua/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-brand-aqua lucide lucide-check">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </div>
                            <span class="text-primary-foreground/80 font-medium">Tailored roadmap</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-aqua/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-brand-aqua lucide lucide-check">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </div>
                            <span class="text-primary-foreground/80 font-medium">No generic solutions</span>
                        </div>
                    </div>
                </div>

                <!-- Right – form -->
                <div class="scroll-animate anim-fade-in-up anim-delay-2">
                    <form class="bg-brand-graphite rounded-2xl p-8 border border-primary-foreground/10 space-y-5">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <input name="name" placeholder="Name"
                                class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition" />
                            <input name="email" type="email" placeholder="Email"
                                class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition" />
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <input name="company" placeholder="Company"
                                class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition" />
                            <input name="website" placeholder="Website"
                                class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition" />
                        </div>
                        <select name="revenue"
                            class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition [&>option]:text-brand-charcoal">
                            <option value="" disabled selected>Monthly revenue range</option>
                            <option value="Under $50k/mo">Under $50k/mo</option>
                            <option value="$50k – $200k/mo">$50k – $200k/mo</option>
                            <option value="$200k – $1M/mo">$200k – $1M/mo</option>
                            <option value="Over $1M/mo">Over $1M/mo</option>
                        </select>
                        <input name="challenge" placeholder="Main challenge"
                            class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition" />
                        <textarea name="message" placeholder="Message" rows="4"
                            class="w-full bg-primary-foreground/5 border border-primary-foreground/10 rounded-lg px-4 py-3 text-sm text-primary-foreground placeholder:text-brand-cool-gray/60 focus:outline-none focus:border-primary/50 transition resize-none"></textarea>

                        <div class="flex flex-col sm:flex-row gap-3 pt-2">
                            <button type="submit"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 rounded-md px-8 h-14 rounded-md px-10 text-base bg-brand-aqua text-brand-charcoal hover:bg-brand-aqua/90 font-semibold hero-button-glow flex-1">
                                Book a Strategy Call <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="ml-2 mt-[2px] lucide lucide-arrow-right">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                            <button type="button"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 rounded-md px-8 h-14 rounded-md px-10 text-base border border-primary-foreground/20 text-primary-foreground hover:bg-primary-foreground hover:text-brand-charcoal font-semibold flex-1">
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: "-60px" });

    document.querySelectorAll(".scroll-animate").forEach(function (el) {
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>