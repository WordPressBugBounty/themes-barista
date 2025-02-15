<?php
/*
================================================================================================
Barista - page.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other content-single.php). The single.php template can be used to call out the
WordPress loop and uses the get_template_part(); to call in the content-single.php to display
the content.

@package        Silver Quantum WordPress Theme
@copyright      Copyright (C) 2016. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (http://lumiathemes.com/)
================================================================================================
*/
?>
<?php get_header(); ?>
    <div id="page-layout" class="<?php echo esc_attr(get_theme_mod('page_layout', 'default')); ?>">
        <div id="content-area" class="content-area">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
            <?php endwhile; ?>
                <div class="paging-navigation">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
        <?php if ('sidebar-left' == get_theme_mod('page_layout')) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
        <?php if ('sidebar-right' == get_theme_mod('page_layout')) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
    </div>
<?php get_footer(); ?>