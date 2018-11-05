 <?php
/*
    Template Name: Front Page
*/
get_header(); ?>

<div class="container">
    <div class="row m-0">
        <div class="col s9">
            <h4>Hey, I’m Ed Gonzalez, A Multidisciplinary Creative, Designing For Digital And Physical Experiences.</h4>
            <p>I communicate through unique concepts that deliver compelling stories. My goal is to solve problems for clients through thoughtful ideas that translate into designs for various mediums. Currently living in Philadelphia.</p>
        </div>
        <div class="col s3"></div>
    </div>
</div>

 <!-- Portfolio Grid Section -->

    <div class="container">
        <h5 class="text-center text-secondary mb-0">Featured Projects</h5>
        <div class="divider"></div>
        <div class="row">
            <?php
            $projects = get_posts( array(
                'post_type'   => 'projects',
                'numberposts' => '-1'
            ) );

            if ( $projects ) {
                foreach ( $projects as $post ) :
                    $image = get_field( "featured_image", $id );
                    $name = get_field( "project_name", $id );
                    $category = get_field( "project_categories", $id );
                    ?>
                <?php
                endforeach;
                wp_reset_postdata();
            }
            ?>
       </div>
    </div>


<?php get_footer(); ?>