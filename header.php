<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo get_bloginfo('name') ?> </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="overflow-x-clip flex justify-center relative ">
    <section>
      <div class="w-full py-[10px]">
        <a href="/registration/" class="text-center text-[#552084] text-[15px] font-[500]"> Winter League Registration Now Open! </a>
      </div>
    </section>
    <div class="max-w-[1440px] px-[30px] lg:px-[100px]  tablet:px-[150px] w-full items-center flex absolute z-[999] top-[40px]">
      <div class="w-[50%] lg:w-[10%] py-[40px]">
        <a href="<?php echo get_site_url() ?> "> <img class="h-[103px] w-auto relative z-50" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt=""></a>
      </div>
      <div class="hidden lg:flex w-[74%]  justify-end">
        <?php echo wp_nav_menu(array(
          'menu'   => 'Header menu',
        )); ?>
      </div>
      <div class="w-1/2 lg:w-[16%] flex justify-end">
        <span class="inline-block cursor-pointer menu-mobile">
          <div class="block lg:hidden" id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </span>
        <a href="<?php esc_url(the_field('header', 'option'))  ?>" class="button_hover hidden lg:inline-block bg-transparent text-[#FFF] text-[20px] font-[600] rounded-[5px]  border-[2px] border-[#FFF] px-[20px] py-[10px]">Sign Up</a>
      </div>
    </div>
    <div class="bg-primary absolute z-[60] h-[100vh] w-full menu-mobile-container bloch lg:hidden">
      <div class="div px-[40px] pb-[70px] pt-[200px]">
        <?php echo  wp_nav_menu(array(
          'menu'   => 'Header menu',
        ));  ?>
        <div class="pt-[50px]">
          <a href="<?php echo get_field('cta_url_header', 'option')['cta_url_header'] ?> " class="purple_button border-white border-[2px]">Sign Up</a>
        </div>
      </div>
    </div>

  </header>


  <script>
    let mobile = document.querySelector(".menu-mobile")

    mobile.addEventListener('click', () => {
      document.querySelector(".menu-mobile-container").classList.toggle('active')
      document.querySelector("#nav-icon4").classList.toggle('open')
    })
  </script>