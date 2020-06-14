<?php get_header();?>
        <div class="content">
           
            <div class="main">
           <h2>Drink</h2>
    <?php
    $args = array( 
        'post_type' => 'drink', 
        'posts_per_page' => 3,
        'orderby' => 'rand'
    );
         
$drinks = new WP_Query( $args );
echo '<div class="three-columns">';
while ( $drinks->have_posts() ) : $drinks->the_post();
    echo '<div class="item">';
    echo '<figure class="testimonial-thumb">';
    the_post_thumbnail('medium');
    echo '</figure>';
    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
    echo '<div class="entry-content">';
    the_content();

    echo get_the_term_list( $drinks->ID, 'drink-category', 'Price: ', ', ', '៛' );


    echo '</div>';
    echo '</div>';
endwhile;
echo '</div>'
?>
                <p>
                    Est fore nulla nulla possumus. Legam non aliquip est veniam, laboris eram quem de anim et ullamco eram nescius, expetendis exquisitaque et mandaremus, quibusdam legam velit si fugiat est quamquam reprehenderit hic voluptate, mandaremus minim velit quamquam sint, ab quae arbitror possumus. Proident ita velit, sed quem aute veniam eiusmod.
                </p>


                <h2>Food</h2>
                <?php

/* 
 * Display 3 random foods
 */

$args = array( 
    'post_type' => 'food', 
    'posts_per_page' => 3,
    'orderby' => 'rand'
);       
                 
$foods = new WP_Query( $args );
echo '<div class="three-columns">';
while ( $foods->have_posts() ) : $foods->the_post();
    echo '<div class="item">';
    echo '<figure class="testimonial-thumb">';
    the_post_thumbnail('medium');
    echo '</figure>';
    echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
    echo '<div class="entry-content">';
    the_content();
    echo get_the_term_list( $foods->ID, 'food-category', 'Price: ', ', ', '៛' );

    echo '</div>';
    echo '</div>';
endwhile;
echo '</div>'
?>

        </div>
        </div>     
                
       <?php get_footer();?>