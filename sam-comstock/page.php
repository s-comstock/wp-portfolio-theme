<?php get_header(); ?>
<!--Hero-->
<div class="hero">
  <div class="hero__title">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="hero__subtitle">
    <h2>
      <strong>
        <a class="hero__breadcrumbs" href="<?php echo get_home_url(); ?>">Home</a> |
        <a class="hero__breadcrumbs" href="<?php the_permalink()?>"><?php the_title(); ?></a>
      </strong>
    </h2>
  </div>
</div>
<div class="page-content">
  <?php while(have_posts()) {
    the_post();
    the_content();
    ?>
</div>
<?php }

get_footer(); ?>
