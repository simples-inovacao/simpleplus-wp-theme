<?php
/**
 * Template: Blog / Category / Tag Archive
 * Displays a paginated grid of post cards matching the home page Insights style.
 */

// JSON-LD: BreadcrumbList
$archive_title = get_the_archive_title();
$archive_url   = get_pagenum_link(1);
$archive_json_ld = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => __('Home', 'simpleplus'),
            'item'     => home_url('/'),
        ],
        [
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => strip_tags($archive_title),
            'item'     => $archive_url,
        ],
    ],
];

get_header();
?>

<script type="application/ld+json"><?php echo wp_json_encode($archive_json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ═══════════════════════════════════════════════
     ARCHIVE HERO — Dark charcoal banner
     ═══════════════════════════════════════════════ -->
<section class="bg-brand-charcoal pt-36 pb-20 md:pt-44 md:pb-28">
    <div class="container-tight text-center">

        <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-4 anim-fade-in-up">
            <?php esc_html_e('Insights', 'simpleplus'); ?>
        </span>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold font-heading text-primary-foreground leading-[1.1] tracking-tight mb-5 anim-fade-in-up anim-delay-1">
            <?php echo wp_kses_post($archive_title); ?>
        </h1>

        <?php
        $archive_description = get_the_archive_description();
        if ($archive_description) :
        ?>
            <p class="text-lg text-brand-cool-gray leading-relaxed max-w-2xl mx-auto anim-fade-in-up anim-delay-2">
                <?php echo wp_kses_post($archive_description); ?>
            </p>
        <?php endif; ?>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
     POSTS GRID — 3-column insight card layout
     ═══════════════════════════════════════════════ -->
<section class="py-20 md:py-28 bg-card">
    <div class="container-tight">

        <?php if (have_posts()) : ?>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
                <?php
                $card_index = 0;
                $delay_classes = ['', 'anim-delay-1', 'anim-delay-2', 'anim-delay-3', 'anim-delay-4', 'anim-delay-5'];
                while (have_posts()) :
                    the_post();
                    $delay = $delay_classes[$card_index % 6];
                    $card_index++;

                    // Get first category
                    $categories = get_the_category();
                    $cat_name   = !empty($categories) ? esc_html($categories[0]->name) : __('Article', 'simpleplus');
                    $cat_link   = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';
                ?>
                <article class="group bg-background rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up <?php echo esc_attr($delay); ?>">

                    <!-- Thumbnail -->
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden" tabindex="-1" aria-hidden="true">
                            <?php the_post_thumbnail('medium_large', [
                                'class'   => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500',
                                'loading' => 'lazy',
                                'alt'     => get_the_title(),
                            ]); ?>
                        </a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>" class="block h-48 bg-secondary flex items-center justify-center" tabindex="-1" aria-hidden="true">
                            <span class="text-muted-foreground text-sm font-heading">Simple Plus</span>
                        </a>
                    <?php endif; ?>

                    <!-- Content -->
                    <div class="p-6">
                        <a href="<?php echo esc_url($cat_link); ?>"
                            class="text-xs font-bold text-primary uppercase tracking-wider hover:text-primary/70 transition-colors">
                            <?php echo $cat_name; ?>
                        </a>

                        <h2 class="font-heading font-bold text-base mt-2 mb-3 text-foreground group-hover:text-primary transition-colors leading-snug">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="text-sm text-muted-foreground leading-relaxed mb-4 line-clamp-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?>
                        </p>

                        <div class="flex items-center justify-between">
                            <a href="<?php the_permalink(); ?>"
                                class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                                <?php esc_html_e('Read more', 'simpleplus'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </a>
                            <time class="text-xs text-brand-cool-gray" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo get_the_date('M j, Y'); ?>
                            </time>
                        </div>
                    </div>

                </article>
                <?php endwhile; ?>
            </div>

            <!-- ─── Pagination ─── -->
            <?php
            $pagination = paginate_links([
                'type'      => 'array',
                'prev_text' => '&larr; ' . __('Previous', 'simpleplus'),
                'next_text' => __('Next', 'simpleplus') . ' &rarr;',
            ]);
            if ($pagination) :
            ?>
            <nav class="flex justify-center items-center gap-2 flex-wrap" aria-label="<?php esc_attr_e('Posts navigation', 'simpleplus'); ?>">
                <?php foreach ($pagination as $page_link) : ?>
                    <?php
                    // Determine if this is the current page (has aria-current or 'current' class)
                    $is_current = strpos($page_link, 'current') !== false;
                    $link_class = $is_current
                        ? 'inline-flex items-center justify-center h-10 min-w-[2.5rem] px-4 rounded-md bg-primary text-primary-foreground font-semibold text-sm'
                        : 'inline-flex items-center justify-center h-10 min-w-[2.5rem] px-4 rounded-md border border-border bg-background hover:bg-accent text-foreground font-semibold text-sm transition-colors';
                    echo str_replace('class="', 'class="' . $link_class . ' ', $page_link);
                    ?>
                <?php endforeach; ?>
            </nav>
            <?php endif; ?>

        <?php else : ?>

            <!-- Empty state -->
            <div class="text-center py-20 max-w-lg mx-auto">
                <div class="w-16 h-16 rounded-2xl bg-secondary flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="text-muted-foreground">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                </div>
                <h2 class="font-heading font-bold text-xl text-foreground mb-3">
                    <?php esc_html_e('No posts yet', 'simpleplus'); ?>
                </h2>
                <p class="text-muted-foreground text-sm leading-relaxed mb-6">
                    <?php esc_html_e('Check back soon — we\'re working on new content.', 'simpleplus'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                    <?php esc_html_e('Back to home', 'simpleplus'); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
