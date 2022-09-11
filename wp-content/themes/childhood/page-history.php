<?php  
/*
    Template Name: Наша история
*/
?>

<?php  
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php echo get_category_by_slug('history_our')->description ?></h1>
            <?php 
                $my_posts = get_posts(array(
                    'numberposts' => -1,
                    'category_name'    => 'history_our',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));
                global $post;
                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?> 
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="subtitle">
                                    <?php the_title(); ?>
                                </div>
                                <div class="aboutus__text">
                                    <?php  the_field('history_descr');?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="aboutus__img" src="<?php the_field('history_img'); ?>">
                            </div>
                        </div>
                    <?php 
                    }
                    wp_reset_postdata(); // сброс
            ?>
</div>

<?php  
    get_footer();
?>