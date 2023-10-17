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
$class_name = 'text-image-full-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image             = get_field('image');
$title             = get_field('title');
$paragraph         = get_field('paragraph');

//echo "<pre>";
//var_dump($section);
//echo "</pre>";
?>


<section class="">
    <div class="block_content" style=" <?php echo (empty($title)) ? 'padding-bottom:0px' : '' ?>">
        <div>
            <div class="relative z-50 text-start"> <?php echo $title ?> </div>
            <div class="relative z-50 blur_custom">
                <p class="text-[#55208499] mt-[30px] text-[16px] lg:text-[18px] font-[500] relative z-50"><?php echo $paragraph ?> </p>
            </div>
        </div>
        <?php if(!empty($image)) :  ?>
            <div class="mt-[100px]">
                <img class="w-full object-cover object-center rounded-[10px]" src="<?php echo $image ?>" alt="">
            </div>
        <?php endif ?>
    </div>
</section>