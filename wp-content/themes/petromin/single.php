<?php
get_header();

$assets_url = trailingslashit(get_template_directory_uri()) . 'assets';
$images_url = $assets_url . '/img';
?>

<section class="hero_section w-full relative h-dvh z-10">
    <div class="relative w-full h-full overflow-hidden">
        <?php if (has_post_thumbnail()) : ?>
            <img fetchpriority="high" decoding="async" loading="eager" 
                src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                class="size-full object-cover" 
                alt="<?php echo esc_attr(get_the_title()); ?>"
                title="<?php echo esc_attr(get_the_title()); ?>">
        <?php else : ?>
            <img fetchpriority="high" decoding="async" loading="eager" 
                src="<?php echo esc_url($images_url . '/blog_hero_img.webp'); ?>"
                class="size-full object-cover" 
                alt="<?php echo esc_attr(get_the_title()); ?>"
                title="<?php echo esc_attr(get_the_title()); ?>">
        <?php endif; ?>

        <div class="view w-full absolute lg:bottom-56 md:bottom-56 bottom-20 left-0 z-30">
            <div class="flex flex-col md:gap-y-8 gap-y-6">
                <h1 class="block xl:text-5xl lg:text-4xl text-3xl text-balance text-white font-semibold !leading-tight md:drop-shadow-[0_4px_6px_rgba(0,0,0,0.7)]">
                    <?php the_title(); ?>
                </h1>

                <?php 
                $categories = get_the_category();
                if ($categories) : ?>
                    <ul class="flex flex-wrap md:gap-5 gap-2 items-center position-relative z-30">
                        <?php foreach ($categories as $category) : 
                            if ($category->slug !== 'uncategorized') : ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                       class="cursor-pointer w-auto md:px-6 px-4 flex space-x-3 items-center bg-[#FF8300] h-8">
                                        <span class="flex items-center gap-2 md:text-base text-sm font-semibold text-white">
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endif;
                        endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="text-white flex items-center gap-4 text-sm">
                    <span><?php echo esc_html(get_the_author()); ?></span>
                    <span>•</span>
                    <span><?php echo esc_html(get_the_date('F j, Y')); ?></span>
                    <span>•</span>
                    <span><?php echo calculate_reading_time(get_the_content()); ?> Min Read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative md:py-20 py-10">
    <div class="view">
        <div class="prose prose-lg max-w-none">
            <?php the_content(); ?>
        </div>
        
        <!-- Related Posts -->
        <?php
        $related_args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => [get_the_ID()],
            'category__in' => wp_get_post_categories(get_the_ID()),
        ];
        $related_posts = new WP_Query($related_args);
        
        if ($related_posts->have_posts()) : ?>
            <div class="mt-16">
                <h3 class="text-2xl font-bold mb-8">Related Articles</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <?php while ($related_posts->have_posts()) : 
                        $related_posts->the_post();
                        $post_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $fallback_image = $images_url . '/media_mention_img.webp';
                        ?>
                        <div class="relative w-full flex flex-col md:gap-y-4 gap-y-3 group">
                            <a href="<?php the_permalink(); ?>" class="w-full relative overflow-hidden duration-300">
                                <img fetchpriority="low" loading="lazy" 
                                    src="<?php echo esc_url($post_image ?: $fallback_image); ?>"
                                    class="size-full group-hover:lg:scale-125 duration-300" 
                                    alt="<?php echo esc_attr(get_the_title()); ?>" 
                                    title="<?php echo esc_attr(get_the_title()); ?>">
                            </a>
                            
                            <a href="<?php the_permalink(); ?>" class="flex gap-2 items-baseline">
                                <h4 class="lg:text-lg md:text-base text-sm font-semibold text-[#121212] group-hover:lg:text-[#CB122D] duration-300">
                                    <?php echo esc_html(get_the_title()); ?>
                                </h4>
                            </a>
                        </div>
                    <?php endwhile; 
                    wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>