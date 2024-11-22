<?PHP
/*
*The Template for displaying Search Result.
*/

get_header();
?>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <!-- <div id="search_title">
                    <php
                    if (have_posts()) {
                        echo '<h1 class="search_title">' . __('Search Results for: ', 'MahmudulHasan') . get_search_query() . '</h1>';
                    } else {
                        echo '<h1 class="search_title">' . __('Nothing Found', 'MahmudulHasan') . '</h1>';
                    } ?>
                </div> -->
                <div id="search_title">
                    <h1 class="search_header"><?php printf( __('Search Results for: %s','MahmudulHasan'),
                     get_search_query()); ?></h1>
                </div>

                <?php get_template_part('template_part/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>