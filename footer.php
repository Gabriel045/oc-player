<footer>
    <section class=" bg-[#552084]">
        <div class="block_content  px-[30px] lg:px-[100px]  tablet:px-[150px]" style="padding-top:76px; padding-bottom:25px">
            <div class="lg:mt-[100px] flex flex-wrap lg:flex-nowrap">
                <div class="mb-[90px] lg:mb-0 w-full lg:w-[50%] text-center lg:text-start flex flex-col items-center lg:items-start">
                    <a href="<?php echo get_site_url() ?>"> <img class="w-[182px]" src="<?php echo  get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt=""> </a>
                    <p class="text-[#ffffffad] my-[35px] font-[400] lg:w-[80%] text-start text-[16px]"><?php the_field('footer_paragraph', 'option'); ?></p>
                    <div class="flex gap-[40px] justify-start">
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['facebook'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['instagram'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['x'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter.svg" alt=""></a>
                    </div>
                </div>
                <div class="w-full lg:w-[50%] flex  justify-center lg:justify-end flex-wrap lg:flex-nowrap">
                    <div class="lg:text-start">
                        <?php echo  wp_nav_menu(array(
                            'menu'   => 'Footer',
                        ));  ?>
                    </div>
                </div>
            </div>

            <div class="flex w-full pt-[27px] mt-[100px] flex-wrap">
                <div class="w-full lg:w-[50%] text-center lg:text-start">
                    <p class="text-[#ffffffad] text-[16px] font-[400]">©2023 OC Players League. All rights reserved.</p>
                </div>
                <div class="w-full lg:w-[50%] flex justify-center lg:justify-end mt-[20px] lg:mt-0 gap-[50px]">
                    <a class="text-[#ffffffad] text-[16px] font-[400]">Terms and Conditions</a>
                    <a href="/privacy-policy" class="text-[#ffffffad] text-[16px] font-[400]">Privacy Policy</a>
                </div>
            </div>
        </div>
    </section>

</footer>

<?php wp_footer(); ?>
</body>

</html>