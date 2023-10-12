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
$class_name = 'hero-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title          = get_field('title') ?: 'Your Title here...';
$text           = get_field('paragraph');
$slider         = get_field('slider');
$button         = get_field('button');

if (!empty($button['url'])) { ?>
    <script>
        jQuery('.slick-list').ready(() => {
            setTimeout(() => {
                document.querySelector(".slick-list").classList.add("full-h")
                document.querySelector(".slick-list").classList.remove("medium-h")
            }, 500);
        })
    </script>
<?php } else { ?>
    <script>
        jQuery('.slick-list').ready(() => {
            setTimeout(() => {
                document.querySelector(".slick-list").classList.remove("full-h")
                document.querySelector(".slick-list").classList.add("medium-h")
            }, 500);
        })
    </script>
<?php }

?>

<section class="relative <?php echo (!empty($button['url'])) ? 'lg:h-[1024px] h-[700px]'  : 'lg:h-[524px] h-[350px]' ?>">
    <div class="absolute z-50  max-w-[1440px] w-full px-[30px] lg:px-[100px]  tablet:px-[150px] <?php echo (!empty($button['url'])) ? 'lg:top-[35%] top-[30%] ' : 'lg:top-[50%] top-[55%]' ?>">
        <div> <?php echo $title ?> </div>
        <p class="lg:w-[72%] my-[40px] text-[18px] lg:text-[22px] font-[500] text-[#ffffff99]"> <?php echo $text ?> </p>
        <?php if (!empty($button['url'])) : ?>
            <div class="flex">
                <a href="<?php echo $button['url'] ?>" class="orange_button"><?php echo $button["text"] ?> </a>
            </div>
        <?php endif ?>
    </div>
    <div class="multiple-items  <?php echo (!empty($button['url'])) ? 'lg:h-[1024px] h-[700px]'  : 'lg:h-[524px]  h-[350px]' ?>  w-full">
        <?php foreach ($slider as $key => $item) : ?>
            <diV class="w-full slick-slide">
                <img class="w-full <?php echo (!empty($button['url'])) ? 'lg:h-[1024px] h-[700px]'  : 'lg:h-[524px]  h-[350px]' ?> object-cover" src="<?php echo $item["images"] ?>" alt="">
            </diV>
        <?php endforeach ?>
    </div>
</section>

<script>
    jQuery(document).ready(() => {
        setTimeout(() => {
            jQuery('.multiple-items').slick({
                infinite: true,
                useTransform: false,
                autoplay: true,
                arrows: false,
                dots: false,
                autoplaySpeed: 5000,
                speed: 500,
                fade: true,
                pauseOnFocus: false,
                pauseOnHover: false,
                cssEase: 'linear',
            });
        }, 300);
    })
</script>