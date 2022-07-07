<?php
/**
 * Template Name: Homepage
 */

//header je povukao iz root tako sto je u too registrovan kao WP_HEADER():
get_header(); ?>


<section class="heroBlock">
<?php
    $args = array('post_type'=>'hero');
    $loop = new WP_Query($args);
    while ($loop->have_posts() ) :$loop->the_post();
    $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full')
?>
    <div class="holder" style="background:url('<?php echo $backgroundImg[0]?>')">
        <div class="container">
            <div class="content">
                <h3><span><?php the_title();?></span></h3>
                <?php the_content(); ?>
                <a href="#" class="btn">Shop Now</a>
            </div>
        </div>
    </div>
<?php endwhile;?>
</section>
<?php
get_template_part('template-parts/footer-menus-widgets');
// WP Templates part ima svoj folder
?>
<?php
get_footer();
?>