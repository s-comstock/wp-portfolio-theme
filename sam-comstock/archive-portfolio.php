<?php get_header(); ?>
<!--Hero-->
<div class="hero">
  <div class="hero__title">
    <h1>Portfolio</h1>
  </div>
  <div class="hero__subtitle">
    <h2>
      <strong>
        <a class="hero__breadcrumbs" href="<?php echo get_home_url(); ?>">Home</a> |
        <a class="hero__breadcrumbs" href="<?php echo get_post_type_archive_link('portfolio'); ?>">Portfolio</a>
      </strong>
    </h2>
  </div>
</div>
<?php
  display_portfolio_grid();
?>
<?php get_footer(); ?>
