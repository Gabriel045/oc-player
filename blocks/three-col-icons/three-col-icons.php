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

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'calendar-events-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title            = get_field('title');
$cards            = get_field('card');


?>

<section id="three-columns">
    <div class="block_content">
        <?php if (!empty($title)) : ?>
            <div class="mb-[60px] lg:mb-[100px] last:mb-0 direction flex flex-col items-center relative z-50">
                <div class="relative z-50 blur_custom">
                    <h2 class="relative z-50 " style="margin-top:0px"> <?php echo $title ?> </h2>
                </div>
            </div>
        <?php endif ?>
        <div class="flex flex-row flex-wrap justify-center">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="flex three-col-card w-full lg:w-[33.3%] lg:px-[25px] last:mb-0 lg:mb-[50px] relative z-50">
                    <div class="<?php echo $bg ?> <?php echo ($layout != 'industry') ? 'p-[25px]' : '' ?> rounded-[10px] relative z-50">
                        <?php echo ($layout == "require") ? '<span class="text-[8px] text-white font-[600] bg-[#06385F] p-[5px] rounded-[3px]">REQUIRED</span>' : '' ?>
                        <img class="relative z-50 w-[48px] h-[48px] mb-[40px]" src="<?php echo $card['icon'] ?>" alt="">
                        <p class="relative z-50 text-[18px] font-[500] text-[#552084] leading-[27px]"><?php echo $card['paragraph'] ?></p>
                        <div class=" relative z-50 card-container"></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</section>