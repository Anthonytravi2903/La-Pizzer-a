<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

    <h3><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; ?>