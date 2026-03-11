<?php
/**
 * Template: Single Blog Post
 * Full article view: hero, content, author card, related posts, CTA.
 */

get_header();

while (have_posts()) : the_post();

// ── Data helpers ──────────────────────────────────────
$categories  = get_the_category();
$cat_name    = !empty($categories) ? esc_html($categories[0]->name) : __('Article', 'simpleplus');
$cat_link    = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';
$author_name = get_the_author_meta('display_name');
$author_bio  = get_the_author_meta('description');
$author_url  = get_author_posts_url(get_the_author_meta('ID'));
$pub_date    = get_the_date('M j, Y');
$pub_date_c  = get_the_date('c');
$logo_url    = get_template_directory_uri() . '/assets/logo-DxVX319K.png';

// Estimated read time
$content       = get_the_content();
$word_count    = str_word_count(wp_strip_all_tags($content));
$read_minutes  = max(1, (int) ceil($word_count / 200));

// JSON-LD: Article schema
$json_ld = [
    '@context'         => 'https://schema.org',
    '@type'            => 'Article',
    'headline'         => get_the_title(),
    'description'      => wp_strip_all_tags(get_the_excerpt()),
    'datePublished'    => get_the_date('c'),
    'dateModified'     => get_the_modified_date('c'),
    'author'           => [
        '@type' => 'Person',
        'name'  => $author_name,
        'url'   => $author_url,
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => get_bloginfo('name'),
        'logo'  => [ '@type' => 'ImageObject', 'url' => $logo_url ],
    ],
    'image'            => has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'large') : $logo_url,
    'mainEntityOfPage' => [ '@type' => 'WebPage', '@id' => get_permalink() ],
];
?>

<script type="application/ld+json"><?php echo wp_json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ═══════════════════════════════════════════════
     POST HERO — Dark charcoal banner, centered
     ═══════════════════════════════════════════════ -->
<section class="bg-brand-charcoal pt-36 pb-20 md:pt-44 md:pb-28">
    <div class="container-tight text-center">

        <!-- Category badge + breadcrumb -->
        <nav class="mb-5 flex justify-center" aria-label="Breadcrumb">
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
                <li>
                    <a href="<?php echo esc_url($cat_link); ?>"
                        class="text-brand-aqua hover:text-brand-aqua/80 transition-colors">
                        <?php echo $cat_name; ?>
                    </a>
                </li>
            </ol>
        </nav>

        <!-- Post title -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold font-heading text-primary-foreground leading-[1.1] tracking-tight mb-6 max-w-4xl mx-auto anim-fade-in-up">
            <?php the_title(); ?>
        </h1>

        <!-- Excerpt / subtitle -->
        <?php if (has_excerpt()) : ?>
            <p class="text-lg text-brand-cool-gray leading-relaxed max-w-2xl mx-auto mb-8 anim-fade-in-up anim-delay-1">
                <?php the_excerpt(); ?>
            </p>
        <?php endif; ?>

        <!-- Meta row: author · date · read time -->
        <div class="inline-flex flex-wrap justify-center items-center gap-x-5 gap-y-2 text-sm text-brand-cool-gray anim-fade-in-up anim-delay-2">
            <span class="flex items-center gap-1.5">
                <span class="w-6 h-6 rounded-full bg-primary/20 flex items-center justify-center text-brand-aqua flex-shrink-0" aria-hidden="true">
                    <?php echo mb_strtoupper(mb_substr($author_name, 0, 1)); ?>
                </span>
                <a href="<?php echo esc_url($author_url); ?>" class="hover:text-brand-aqua transition-colors font-medium">
                    <?php echo esc_html($author_name); ?>
                </a>
            </span>
            <span aria-hidden="true" class="hidden sm:inline text-primary-foreground/20">·</span>
            <time datetime="<?php echo esc_attr($pub_date_c); ?>">
                <?php echo esc_html($pub_date); ?>
            </time>
            <span aria-hidden="true" class="hidden sm:inline text-primary-foreground/20">·</span>
            <span>
                <?php printf(esc_html(_n('%d min read', '%d min read', $read_minutes, 'simpleplus')), $read_minutes); ?>
            </span>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
     FEATURED IMAGE — full-width within container
     ═══════════════════════════════════════════════ -->
<?php if (has_post_thumbnail()) : ?>
<div class="bg-background">
    <div class="container-tight">
        <div class="relative -mt-8 rounded-2xl overflow-hidden shadow-2xl border border-border max-h-[480px]">
            <?php the_post_thumbnail('large', [
                'class'   => 'w-full object-cover max-h-[480px]',
                'loading' => 'eager',
                'alt'     => get_the_title(),
            ]); ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- ═══════════════════════════════════════════════
     ARTICLE CONTENT — prose, max-w-3xl
     ═══════════════════════════════════════════════ -->
<section class="py-16 md:py-24 bg-background">
    <div class="container-tight">
        <div class="mx-auto max-w-3xl">
            <div class="prose prose-lg max-w-none
                prose-headings:font-heading prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-foreground
                prose-h2:text-2xl prose-h2:mt-12 prose-h2:mb-4
                prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                prose-p:text-muted-foreground prose-p:leading-relaxed
                prose-a:text-primary prose-a:no-underline hover:prose-a:text-primary/80 prose-a:font-medium
                prose-strong:text-foreground prose-strong:font-semibold
                prose-ul:text-muted-foreground prose-ol:text-muted-foreground
                prose-li:leading-relaxed
                prose-img:rounded-xl prose-img:shadow-lg
                prose-blockquote:border-l-4 prose-blockquote:border-brand-aqua prose-blockquote:pl-6 prose-blockquote:text-muted-foreground prose-blockquote:italic prose-blockquote:not-italic
                prose-code:text-primary prose-code:bg-secondary prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-sm
                prose-hr:border-border">
                <?php the_content(); ?>
            </div>

            <?php
            wp_link_pages([
                'before'      => '<nav class="mt-10 flex gap-3 flex-wrap">',
                'after'       => '</nav>',
                'link_before' => '<span class="inline-flex items-center justify-center h-9 px-4 rounded-md border border-border bg-background hover:bg-accent text-sm font-semibold transition-colors cursor-pointer">',
                'link_after'  => '</span>',
            ]);
            ?>

            <!-- Post tags -->
            <?php
            $tags = get_the_tags();
            if ($tags) :
            ?>
            <div class="mt-10 pt-8 border-t border-border flex flex-wrap gap-2">
                <?php foreach ($tags as $tag) : ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                        class="text-xs bg-secondary text-muted-foreground hover:bg-primary/10 hover:text-primary rounded-full px-3 py-1.5 font-medium transition-colors">
                        #<?php echo esc_html($tag->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
     AUTHOR CARD — same card pattern as the theme
     ═══════════════════════════════════════════════ -->
<section class="py-8 bg-background">
    <div class="container-tight">
        <div class="mx-auto max-w-3xl">
            <div class="bg-card rounded-2xl border border-border p-7 flex items-start gap-5">
                <!-- Avatar -->
                <?php $author_avatar = get_avatar_url(get_the_author_meta('ID'), ['size' => 80]); ?>
                <img src="<?php echo esc_url($author_avatar); ?>"
                    alt="<?php echo esc_attr($author_name); ?>"
                    width="56" height="56"
                    loading="lazy"
                    class="w-14 h-14 rounded-full object-cover flex-shrink-0 border border-border">

                <!-- Info -->
                <div>
                    <p class="text-xs font-bold tracking-[0.15em] uppercase text-brand-cool-gray mb-1">
                        <?php esc_html_e('Written by', 'simpleplus'); ?>
                    </p>
                    <a href="<?php echo esc_url($author_url); ?>"
                        class="font-heading font-bold text-foreground hover:text-primary transition-colors text-base">
                        <?php echo esc_html($author_name); ?>
                    </a>
                    <?php if ($author_bio) : ?>
                        <p class="text-sm text-muted-foreground leading-relaxed mt-2">
                            <?php echo esc_html($author_bio); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<!-- ═══════════════════════════════════════════════
     RELATED POSTS — same 3-col insight card grid
     ═══════════════════════════════════════════════ -->
<?php
global $post;
$related_categories = wp_get_post_categories($post->ID);
if (!empty($related_categories)) {
    $related_query = new WP_Query([
        'category__in'   => $related_categories,
        'post__not_in'   => [$post->ID],
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'no_found_rows'  => true,
    ]);

    if ($related_query->have_posts()) :
?>
<section class="py-20 md:py-28 bg-card">
    <div class="container-tight">

        <!-- Section heading -->
        <div class="mx-auto max-w-[800px] mb-12 md:mb-16 text-center scroll-animate anim-fade-in-up">
            <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-brand-aqua mb-4">
                <?php esc_html_e('Keep reading', 'simpleplus'); ?>
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-[2.5rem] font-bold font-heading tracking-tight text-foreground leading-[1.12]">
                <?php esc_html_e('More Insights', 'simpleplus'); ?>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $ri = 0;
            $delay_classes = ['', 'anim-delay-1', 'anim-delay-2'];
            while ($related_query->have_posts()) : $related_query->the_post();
                $rel_categories = get_the_category();
                $rel_cat        = !empty($rel_categories) ? esc_html($rel_categories[0]->name) : __('Article', 'simpleplus');
                $rel_cat_link   = !empty($rel_categories) ? get_category_link($rel_categories[0]->term_id) : '#';
                $delay = $delay_classes[$ri % 3];
                $ri++;
            ?>
            <article class="group bg-background rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all duration-300 scroll-animate anim-fade-in-up <?php echo esc_attr($delay); ?>">

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

                <div class="p-6">
                    <a href="<?php echo esc_url($rel_cat_link); ?>"
                        class="text-xs font-bold text-primary uppercase tracking-wider hover:text-primary/70 transition-colors">
                        <?php echo $rel_cat; ?>
                    </a>
                    <h3 class="font-heading font-bold text-base mt-2 mb-3 text-foreground group-hover:text-primary transition-colors leading-snug">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="text-sm text-muted-foreground leading-relaxed mb-4 line-clamp-3">
                        <?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"
                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary hover:gap-3 transition-all">
                        <?php esc_html_e('Read more', 'simpleplus'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

    </div>
</section>
<?php
    endif; // related_query->have_posts()
} // related_categories
?>

<!-- ═══════════════════════════════════════════════
     CTA STRIP — Dark compact, links to /#contact
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
