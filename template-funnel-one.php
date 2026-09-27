<?php

/**
 * Template name: Funnel One
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fastest_theme
 */
get_header('custom');

// Change these values when duplicating this template to recolor its checkout.
$checkout_colors = [
    'primary'          => '#e44708',
    'primary-light'    => '#ff7a32',
    'highlight'        => '#ffd166',
    'background'       => '#171717',
    'surface'          => '#292929',
    'text'             => '#ffffff',
    'muted-text'       => '#eeeeee',
    'heading'          => '#ffffff',
    'input-background' => '#ffffff',
    'input-text'       => '#171717',
];
?>

 <!-- Hero Section -->



   <section class="hero">

      <div class="hero-content">
         <div class="product-badge">NATURAL MIXED HONEY</div>
         <h1 class="hero-title">ন্যাচারাল মিক্সড মধু</h1>
      </div>

   </section>


  <!-- Order Form Section -->

   <section class="order-section" id="order"
      style="<?php echo esc_attr(fastest_checkout_palette_style($checkout_colors)); ?>">

      <div class="container">

        <?php the_content()?>

      </div>

   </section>



   <!-- Footer -->
<?php get_footer();?>
