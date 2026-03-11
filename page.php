<?php
/**
 * Template: Generic Page
 * Used for all static WordPress pages (About, Privacy Policy, etc.)
 */

// JSON-LD: WebPage structured data
if (have_posts()) {
    the_post();
    $page_json_ld = [
        '@context'    => 'https://schema.org',
        '@type'       => 'WebPage',
        'name'        => get_the_title(),
        'url'         => get_permalink(),
        'description' => wp_strip_all_tags(get_the_excerpt() ?: get_bloginfo('description')),
        'publisher'   => [
            '@type' => 'Organization',
            'name'  => get_bloginfo('name'),
            'logo'  => [
                '@type' => 'ImageObject',
                'url'   => get_template_directory_uri() . '/assets/logo-DxVX319K.png',
            ],
        ],
    ];
    rewind_posts();
}

get_header();
?>

<?php if (!empty($page_json_ld)): ?>
<script type="application/ld+json"><?php echo wp_json_encode($page_json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

<!-- ═══════════════════════════════════════════════
     PAGE HERO — Dark charcoal banner with title
     ═══════════════════════════════════════════════ -->
<section class="bg-brand-charcoal pt-36 pb-20 md:pt-44 md:pb-28">
    <div class="container-tight text-center">

        <!-- Breadcrumb -->
        <nav class="mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.15em] uppercase text-brand-cool-gray">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="hover:text-brand-aqua transition-colors">
                        <?php esc_html_e('Home', 'simpleplus'); ?>
                    </a>
                </li>
                <li aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="text-brand-aqua" aria-current="page">
                    <?php the_title(); ?>
                </li>
            </ol>
        </nav>

        <!-- Page title -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold font-heading text-primary-foreground leading-[1.1] tracking-tight mb-6 anim-fade-in-up">
            <?php the_title(); ?>
        </h1>

        <?php if (has_excerpt()) : ?>
            <p class="text-lg md:text-xl text-brand-cool-gray leading-relaxed max-w-2xl mx-auto anim-fade-in-up anim-delay-2">
                <?php the_excerpt(); ?>
            </p>
        <?php endif; ?>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
     PAGE CONTENT — Light background, max-w-3xl prose
     ═══════════════════════════════════════════════ -->
<section class="py-20 md:py-28 bg-background">
    <div class="container-tight">
        <div class="mx-auto max-w-3xl">
            <div class="prose prose-lg max-w-none
                prose-headings:font-heading prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-foreground
                prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-4
                prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                prose-p:text-muted-foreground prose-p:leading-relaxed
                prose-a:text-primary prose-a:no-underline hover:prose-a:text-primary/80
                prose-strong:text-foreground prose-strong:font-semibold
                prose-ul:text-muted-foreground prose-ol:text-muted-foreground
                prose-li:leading-relaxed
                prose-blockquote:border-l-primary prose-blockquote:text-muted-foreground
                prose-code:text-primary prose-code:bg-secondary prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-sm prose-code:font-medium
                prose-hr:border-border">
                <?php the_content(); ?>
            </div>

            <?php
            // Previous/Next page navigation (for multi-page posts using <!--nextpage-->)
            wp_link_pages([
                'before'      => '<nav class="mt-10 flex gap-4">',
                'after'       => '</nav>',
                'link_before' => '<span class="inline-flex items-center justify-center h-9 px-4 rounded-md border border-border bg-background hover:bg-accent text-sm font-semibold transition-colors cursor-pointer">',
                'link_after'  => '</span>',
            ]);
            ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<!-- ═══════════════════════════════════════════════
     CTA STRIP — Dark, compact — same pattern as hero
     ═══════════════════════════════════════════════ -->
<section class="bg-brand-charcoal py-20 md:py-28">
    <div class="container-tight">
        <div class="text-center max-w-2xl mx-auto scroll-animate anim-fade-in-up">
            <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-4">
                <?php esc_html_e('Let\'s work together', 'simpleplus'); ?>
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold font-heading text-primary-foreground leading-[1.12] tracking-tight mb-5">
                <?php esc_html_e('Ready to scale your e-commerce?', 'simpleplus'); ?>
            </h2>
            <p class="text-brand-cool-gray text-lg leading-relaxed mb-8">
                <?php esc_html_e('Let\'s talk about how Simple Plus can drive measurable growth for your brand.', 'simpleplus'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>"
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 h-14 px-10 text-base bg-brand-aqua text-brand-charcoal hover:bg-brand-aqua/90 font-semibold hero-button-glow">
                <?php esc_html_e('Book a Strategy Call', 'simpleplus'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
