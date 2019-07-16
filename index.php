<?php
/*
Template Name: Main Template
*/
?>
<?php get_header(); ?>

<main>
    <section id="primary">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <a href="<?php echo get_post_meta($post->ID, 'button_url', true); ?>"><?php echo get_post_meta($post->ID, 'button_text', true); ?></a>
        <?php endwhile; endif; ?>
    </section>
    <section id="card">
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-404') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-404')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/6417dd09aae253cfcf9f90d77b9bc424.js"></script></p>
            </div>
        <?php } ?>
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-footer') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-footer')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/c9ac5c195c779dd51e3fd828bc32e865.js"></script></p>
            </div>
        <?php } ?>
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-function') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-function')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/dc320ba40fbc4d1675c9c59909c4cce7.js"></script></p>
            </div>
        <?php } ?>
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-header') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-header')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/c7d387e613d71f5e5e7ff82bdd21b0ad.js"></script></p>
            </div>
        <?php } ?>
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-index') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-index')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/a552eb24a92c0a7530edf88067135e16.js"></script></p>
            </div>
        <?php } ?>
        <?php if (get_theme_mod('eLeadWorks-cards-callout-display-style') == "Yes") { ?>
            <button class="accordion"><?php echo wpautop(get_theme_mod('eLeadWorks-cards-callout-headline-style')) ?></button>
            <div class="panel">
            <p><script src="https://gist.github.com/eLeadWorks/648aadda31bc447c8aadcfa2c7849a3e.js"></script></p>
            </div>
        <?php } ?>
    </section>
</main>

<?php
get_footer(); ?>
