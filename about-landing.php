<?php 

/*
*Template Name: About Landing
*/

?>


<?php  get_header() ?>

<div class="section-about padre">
      <div class="row-about fila">
         <?php  $titulo_about = get_field('titulo_about') ?>
          <h2><?php  echo $titulo_about ?></h2>
          <?php $texto_about = get_field('texto_about') ?>
          <p><?php echo $texto_about  ?></p>
      </div>
</div>

<div class="coaches padre">
    <div class="row-coaches fila">
        <?php  $titulo_coaches = get_field('titulo_coaches') ?>
        <h2><?php  echo $titulo_coaches ?></h2>
        <?php  $texto_coaches = get_field('texto_coaches') ?>
        <p><?php  echo $texto_coaches ?></p>

    </div>

    <div class="listado-coaches">
           <?php   $args = array(
              'post_type' => 'coaches',
              'post_per_page' => 30,
              'order_by' => 'title',
              'order' => 'ASC'
           ); 
           
           $query = new WP_Query($args);?>
           <?php while($query->have_posts()) : $query->the_post()?>
             <div class="card-coach">
                 <?php $img_coach = get_field('img_coach')  ?>
                 <img src="<?php echo esc_url($img_coach['url'])   ?>" alt="">
                 <div class="txt-coach">
                    <?php   $titulo_nombre_coach = get_field('titulo_nombre_coach') ?>
                    <h3><?php  echo $titulo_nombre_coach ?></h3>
                    <?php  $texto_descripcion_coach = get_field('texto_descripcion_coach') ?>
                    <p><?php  echo $texto_descripcion_coach  ?></p>
                    <a href="<?php   the_permalink()  ?>" class="ver-mas">Ver Mas</a>
                    <style>
                        .ver-mas{
                            
                    text-decoration: none;
                    text-transform: uppercase;
                    font-style: italic;
                    color:#ff4100;
                    font-weight: 700;
                    font-size: 20px;
                }
                        
                    </style>
                 </div>
             </div>
           <?php  endwhile; wp_reset_postdata() ?>
    </div>
</div>

<style>
    .padre{
        width: 100%;
        padding: 50px 0px;
    }
    .fila{
        width: 90%;
        margin: 0px auto;
        height: auto;
        max-width: 1140px;
    }
    .row-about h2 , .row-coaches h2{
          font-size: 38px;
          font-family: "Raleway", sans-serif;
          font-style: italic;
          text-transform: uppercase;
          color: #000;
          font-weight: 700;
          text-align: center;
    }

    @media(min-width:991px){
        .row-about h2 ,.row-coaches h2{
            text-align: left;
        }
    }

    .row-about p , .row-coaches p {
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        text-align: center;
        
    }
    @media(min-width:991px){
        .row-about p ,.row-coaches p{
            text-align: left;
            max-width: 900px;
            font-size: 20px;
            line-height: 1.5;
        }
    }

    .coaches{
        background-color: #f4f4f4;
    }

    .listado-coaches{
    
        width: 90%;
        margin: 0px auto;
        padding: 50px 0px;
    }

    @media(min-width:991px){
        .listado-coaches{
           display: flex;
           flex-direction: row;
           justify-content: center;
        }
    }

    .listado-coaches .card-coach{
        width: 90%;
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
    }

    .listado-coaches .card-coach img {
            width: 100%;
            height: auto;
        }

    @media(min-width:991px){
        .listado-coaches .card-coach {
            width: 32%;
            flex-direction: column;
            align-items: flex-start;
        }

        .listado-coaches .card-coach img {
            width: 100%;
            height: auto;
        }
    }

    .listado-coaches .card-coach h3 , .listado-coaches .card-coach p{
        text-align: center;
        
    }

    .listado-coaches .card-coach h3{
        font-family: "Raleway", sans-serif;
        color:#000;
        font-weight: 700;
        font-size: 24px;
        font-style: italic;
    }

    @media(min-width:991px){
        .listado-coaches .card-coach h3 {
            text-align: left;
        }
    }

    .listado-coaches .card-coach p{
        font-family: "Montserrat", sans-serif;
    }
    @media(min-width:991px){
        .listado-coaches .card-coach p {
            text-align: left;
        }
    }
</style>

<?php echo get_template_part('template-parts/content-fun') ?>


<?php get_footer() ?>