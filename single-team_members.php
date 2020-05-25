<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $job_title = get_field('job_title'); ?>

<?php $favourite_film = get_field('favourite_film'); ?>

<?php $favourite_filmmaker = get_field('favourite_filmmaker'); ?>

<?php $favourite_actor = get_field('favourite_actor'); ?>

<div class="single-team-member wrapper">

    <div class="single-member-container">

        <div class="top-content">

            <h1><?php the_title(); ?></h1>

            <h2><?php echo $job_title; ?></h2>

            <h3>Additional information:</h3>

            <p>Favourite Film: <span class="fav-span"><?php echo $favourite_film; ?></span></p>

            <p>Favourite Filmmaker: <span class="fav-span"><?php echo $favourite_filmmaker; ?></span></p>

            <p>Favourite Actor: <span class="fav-span"><?php echo $favourite_actor; ?></span></p>

        </div>

        <div class="single-member-img">

            <? the_post_thumbnail('medium') ?>

        </div>

    </div>

    <div class="bottom-content">

        <?php the_content(); ?>

    </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>