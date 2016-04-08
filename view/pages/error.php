<?php get_header(); ?>
<?php get_sidebar(); ?>

    <div class="content-wrapper">

        <section class="content">
          <div class="error-page">
            <h2 class="headline text-yellow">ERROR!</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
              <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="<?php echo SITE_URL; ?>">return to dashboard</a> and try another URL.
              </p>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section>
    </div>


<?php get_footer(); ?>