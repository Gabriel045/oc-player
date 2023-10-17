<?php
get_header(); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="relative lg:h-[524px] h-[350px]">
        <div class="absolute z-50  max-w-[1440px] w-full px-[30px] lg:px-[100px]  tablet:px-[150px] <?php echo (!empty($button['url'])) ? 'top-[35%]' : 'lg:top-[50%] top-[55%]' ?>">
            <h1> Terms & Conditions </h1>
        </div>
        <div class="lg:h-[524px]  h-[350px]  w-full">
            <diV class="w-full ">
                <img class="w-full lg:h-[524px]  h-[350px] object-cover" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Rectangle.png" alt="">
            </diV>
        </div>
    </section>

    <section id="blog_content" class="relative">
        <div class="cont w-full flex flex-col items-center block_content">
            <?php the_content(); ?>
        </div>
    </section>

</main>


<?php get_footer(); ?>