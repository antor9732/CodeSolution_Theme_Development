<?PHP
/*
*The Template for displaying 404 pages (Not Found).
*/

get_header();
?>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
               <p>404 Error - page Not Found</p>
              <h1>Oops! Looks Like something was wrong</h1>
              <div class="error_search">
                <?php get_search_form(); ?>
              </div> 
              <a href="<?php echo home_url(); ?>" class="homepage">Go To Home</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>