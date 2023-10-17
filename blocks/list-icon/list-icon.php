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
$class_name = 'list-item-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title           = get_field('title');
$text            = get_field('text');
$cta             = get_field('cta');
$items           = get_field('items');

?>

<section class="bg-[#F4F4F4]">
    <div class="block_content">
        <div class="flex gap-[30px] lg:gap-[115px] lg:flex-nowrap flex-wrap">
            <div class="w-full lg:text-start text-center lg:w-[45%] relative mb-[60px] lg:mb-0">
                <h2 class="mb-[30px] lg:mb-[46px] z-50 relative text-start"><?php echo $title ?></h2>
                <p class="mb-[30px] text-[18px] text-[#55208499] font-[500] text-start  "><?php echo $text ?></p>
                <div class="relative blur_custom w-full lg:w-fit text-center">
                    <?php echo (!empty($cta["url"])) ? '<a href="' . $cta["url"] . '" class="purple_button inline-block relative z-50 w-full lg:w-fit">' . $cta['text'] . '</a>' : '' ?>
                </div>
            </div>
            <div class="bf lg:w-[55%]">

                <?php foreach ($items as $key => $item) : ?>
                    <div class="item-content lg:gap-0 gap-[31px] flex flex-wrap lg:flex-nowrap  items-start mb-[60px]">
                        <div class="w-full lg:w-[20%]">
                            <img class="w-[52px] h-[52px] relative z-50" src="<?php echo $item['icon'] ?>" alt="">
                        </div>
                        <div class="flex flex-col w-full lg:w-[80%]">
                            <span class="text-[16px] font-[600] text-primary mb-[5px]"><?php echo $item['title'] ?></span>
                            <span class="text-[16px] font-[400] text-primary opacity-[0.6]"> <?php echo  $item['paragraph'] ?> </span>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div id="style"></div>
</section>