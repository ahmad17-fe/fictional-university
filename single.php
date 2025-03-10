<?php get_header()?>

<?php
    while (have_posts()) {
        the_post();
    ?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title()?></h1>
        <div class="page-banner__intro">
            <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo site_url('/news') ?>">
                <i class="fa fa-home" aria-hidden="true"></i> Blog Home
            </a>
            <span class="metabox__main">
                <span>Posted by</span>
                <span><?php the_author_posts_link(); ?></span> on
                <span><?php the_time('n.j.y')?></span> in
                <span><?php the_category(', ')?></span>
            </span>
        </p>
    </div>
    <div class="generic-content"><?php the_content(); ?></div>
</div>
<?php
    }
?>

<?php get_footer()?>