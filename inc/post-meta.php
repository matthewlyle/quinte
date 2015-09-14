<aside class="post-meta">
    <ul>
      <li><a href="<?php the_permalink() ?>"><i class="fa fa-clock-o"></i><?php the_time( get_option( 'date_format' ) ); ?></a></li>
      <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i><?php the_author(); ?></a></li>
    </ul>
</aside>