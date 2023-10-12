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
$class_name = 'three-columns-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$layout           = get_field('layout');
$title            = get_field('title');
$cards            = get_field('card');


?>

<section id="three-columns">
    <div class="block_content" style="padding-top:0px; padding-bottom:0px;">
        <?php if (!empty($title)) : ?>
            <div class="mb-[60px] lg:mb-[100px] last:mb-0 direction flex flex-col items-center relative z-50">
                <div class="relative z-50 blur_custom">
                    <h2 class="relative z-50 " style="margin-top:0px"> <?php echo $title ?> </h2>
                </div>
            </div>
        <?php endif ?>
        <div class="flex flex-row flex-wrap gap-y-[80px]">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="flex three-col-card w-full lg:w-[33.3%] lg:px-[40px] last:mb-0">
                    <div class="p-[20px] rounded-[10px] bg-[#f7f4f9] w-full">
                        <?php echo ($layout == "require") ? '<span class="text-[8px] text-white font-[600] bg-[#06385F] p-[5px] rounded-[3px]">REQUIRED</span>' : '' ?>
                        <p class=" text-[18px] font-[500] text-[#552084] leading-[27px]"><?php echo $card['paragraph'] ?></p>
                        <div class="mt-[30px]">
                            <div>
                                <span class="text-[#55208499] text-[18px] font-[500]"> <?php echo $card["month"] ?> </span>
                                <p class="inline ml-[50px] text-primary text-[14px] font-[500]">Location: <span> <?php echo $card["location"] ?> </span> </p>
                                <div class="text-[18px] font-[700] text-primary mt-[15px]">
                                    <span> <?php echo $card["start_day"] ?> </span>
                                    /
                                    <span> <?php echo $card["end_day"] ?> </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</section>