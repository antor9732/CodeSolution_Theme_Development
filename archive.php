

<?PHP
/*
*The main Template Header
*/

get_header();
?>


<h1>This is Archive page</h1>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?> 