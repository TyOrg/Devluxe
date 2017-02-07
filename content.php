

<h1><?php the_title(); ?></h1>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted <?php the_time('F j, Y'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>

<hr>