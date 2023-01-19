<?php get_header(); ?>


<section class="hero">
        <div class="hero-main">
            <?php if( get_field('hero_bg_img') ): ?>
                <img class="hero-laptop" src="<?php the_field('hero_bg_img'); ?>" />
            <?php endif; ?>
                <div class="hero_header">

                    <div class="hero_title">
                        <h2><?php the_field('hero_title') ?></h2>
                        <p><?php the_field('hero_description') ?></p>
                        <div class="hero_btn">
                        <button class="btn">Jetzt einführen</button>
                        </div>
                    </div>
                </div>
                <div class="hero_footer">
                    <div class="hero_footer_item">
                    <?php if( get_field('hero_info_icon_1') ): ?>
                        <img src="<?php the_field('hero_info_icon_1'); ?>" />
                    <?php endif; ?>
                        <h4><?php the_field('hero_info_1') ?></h4>
                    </div>
    
                    <div class="hero_footer_item">
                    <?php if( get_field('hero_info_icon_2') ): ?>
                        <img src="<?php the_field('hero_info_icon_2'); ?>" />
                    <?php endif; ?>
                        <h4><?php the_field('hero_info_2') ?></h4>
                    </div>
    
                    <div class="hero_footer_item">
                    <?php if( get_field('hero_info_icon_3') ): ?>
                        <img src="<?php the_field('hero_info_icon_3'); ?>" />
                    <?php endif; ?>
                        <h4><?php the_field('hero_info_3') ?></h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>