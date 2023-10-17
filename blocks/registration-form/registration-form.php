<?php

/**
 * Registration Form Template.
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

?>

<section class="registration-form-wrap">
    <div class="container">
        <div class="registration-form">
            <?php echo do_shortcode($form_code); ?>
        </div>
    </div>
</section>

<script type="text/javascript">
    jQuery(document).on("gform_confirmation_loaded", function(e, form_id) {
        setTimeout(() => {
            const element = document.querySelector(".thanks_message");
            element.scrollIntoView({
                block: "center",
                behavior: 'smooth'
            });
        }, 500);
    });


    jQuery(document).ready(function() {
        let select_id = 'input_1_10_1'; // Change this
        let select_month_options = jQuery('#' + select_id + ' option');
        let month_names = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        jQuery.each(select_month_options, function(key, option) {
            let value = option.value;
            if ('' !== value) {
                option.label = month_names[value];
            }
        });
    });

    jQuery(document).ready(function($) {

        jQuery(document).on('gform_post_render', function(event, form_id, current_page) {

            var formId = '#gform_1';
            var nextButtonClass = '.gform_next_button';

            var $currentStepData = '#' + $(formId + ' .gf_step.gf_step_active').attr('id').replace('gf_step', 'gform_page');
            var $currentStep = $($currentStepData);

            var $errorFields = $(formId + ' .gfield_error');

            if ($errorFields.length > 0) {

                var firstErrorField = $errorFields.first();

                $('html, body').animate({
                    scrollTop: firstErrorField.offset().top - 100
                }, 500);

                e.preventDefault();
            }

            if ($currentStep.find('.gfield_error').length === 0) {

                var $nextStep = $currentStep;

                if ($nextStep.length > 0) {
                    $('html, body').animate({
                        scrollTop: $nextStep.offset().top
                    }, 500);

                    $currentStep.removeClass('active');
                    $nextStep.addClass('active');
                }

            }

        });

    });
</script>