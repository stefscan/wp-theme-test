<?php get_header();  ?>

    <?php if(is_archive(  )) : ?>

        <h2><?php echo esc_html(get_the_category()[0]->name)?></h2>
  
    <?php else : ?>

        <h2>Accueil</h2>

    <?php endif ?>
    
        <div class="flex">
            <section class="trois-quart">

            <?php if(have_posts()) : ?>

                <?php while(have_posts(  )) : the_post(  ); ?>

                <article class="flex post">

                        <div class="quart">
                            <?php if(has_post_thumbnail(  )) : ?>
                                     <?php the_post_thumbnail('small', ['class' => 'fluide']); ?>
                            <?php endif; ?>
                        </div>
                   <!-- NOTE : Dans un premier temps mettre seulement the_content() -->
                    <div class="texte-article trois-quart">
                        <h3><?php the_title(  ) ?></h3>
                               <p><?php the_excerpt(  ) ?>  <a href="<?php the_permalink(  ) ?>">En savoir plus...</a></p> 
                    </div>
                </article>
                
                <?php endwhile; ?>

            <?php endif; ?>

            </section>
            <section class="quart sidebar">
                
                    <?php get_sidebar(); ?>

            </section>
        </div>

   <?php get_footer( ) ?>