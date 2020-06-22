<?php
  $post_type = get_post_type( $post->ID );
?>

<div class="breadcrumbs">
  <ol class="breadcrumbs__list">
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo HOME_URL; ?>">TOP</a>
    </li>
    <?php if($slug) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo HOME_URL.$slug;?>"><?php echo $slug; ?></a>
    </li>
    <?php } ?>
    <?php if($post_type && !$slug) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo HOME_URL.$post_type;?>s"><?php echo $post_type; ?>s</a>
    </li>
    <?php } ?>
    <?php if($singlePage) { ?>
    <li class="breadcrumbs__list-item">
      <a class="breadcrumbs__link" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </li>
    <?php } ?>
  </ol>
</div>