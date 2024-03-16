<?php  get_header() ?>

<div class="contenedor-single-coach">
    <div class="row-single-coach">
         <?php  while(have_posts()) : the_post()  ?>
          <?php   $img_coach = get_field('img_coach') ?>
           <img src="<?php  echo esc_url($img_coach['url'])  ?>" alt="">
           <?php  $titulo_nombre_coach = get_field('titulo_nombre_coach') ?>
           <h2><?php   echo $titulo_nombre_coach  ?></h2>
           <p><?php  echo get_field('texto_descripcion_coach')  ?></p>

         <?php  endwhile;  ?>
    </div>
</div>

<style>
    .contenedor-single-coach{
        width: 100%;
        height: auto;
        padding: 50px 0px;
    }

    .contenedor-single-coach .row-single-coach{
        width: 90%;
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .row-single-coach h2{
        font-family: "Raleway", sans-serif;
        color:#000;
        font-weight: 700;
        font-size: 30px;
        font-style: italic;
    }

    .row-single-coach p{
        font-family: "Montserrat", sans-serif;
        font-size: 20px;
        font-style: italic;
        text-align: center;
    }
</style>