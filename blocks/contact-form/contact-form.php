<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */


// Load values and assign defaults.
$form_code = get_field('form_shortcode');
$title = get_field('title');
$text = get_field('text');


?>

<section class="bg-[#F4F4F4]">
    <div class="block_content">
        <div class="flex justify-center ">
            <div class="w-full lg:text-start text-center lg:w-[60%] relative mb-[60px] lg:mb-0">
                <h2 class="mb-[30px] lg:mb-[46px] z-50 relative text-center"><?php echo $title ?></h2>
                <p class="text-center text-[#55208499] mt-[30px] text-[16px] lg:text-[18px] font-[500] relative z-50"><?php echo $text ?> </p>
            </div>
        </div>
        <div id="contact_form" class="registration-form flex justify-center mt-[30px] lg:mt-[70px]">
            <?php echo do_shortcode($form_code); ?>
        </div>
    </div>
</section>