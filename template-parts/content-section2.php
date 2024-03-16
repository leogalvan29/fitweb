<div class="section-2">

     
        
    <div class="row-section-2">
    <?php  $titulo_2 = get_field('titulo_2') ?>
       <h2><?php  echo $titulo_2 ?></h2>
       <?php  $txt_2 = get_field('txt_2')?>
        <p><?php   echo $txt_2 ?></p>
    <ul>

    <?php  
        
        $args = array(
           'post_type' => 'iconos_home',
           "post_per_page" => 30,
           "order_by"=> 'title',
           "order" => "ASC"
        );
       
        $query = new WP_Query($args); ?>
        <?php   while($query->have_posts()): $query-> the_post()  ?>

        <li>
            <?php  $icono_home = get_field('icono_home') ?>
            
            <img src="<?php echo esc_url($icono_home['url'])   ?>" alt="">
            <?php  $titulo_icono = get_field('titulo_icono') ?>
           <h3><?php  echo $titulo_icono ?></h3>
           <?php  $texto_icono = get_field('texto_icono') ?>
           <p><?php echo $texto_icono  ?></p>
        </li>
        <?php  endwhile; wp_reset_postdata()  ?>

    </ul>
      <div class="row-boton">
      <a href="<?php  echo get_theme_mod('url_cta_2')  ?>" class="cta-2"><?php  echo get_theme_mod('texto_cta_2')  ?></a>
       <style>
         .cta-2 {
            text-decoration: none;
            background-color: <?php  echo get_theme_mod('color_cta_2')  ?>;
            color:#ffffff !important;
            width: 220px;
            padding: 5px 15px;
            font-family: "Raleway", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            font-weight: 700;
            font-style: italic;

         }
       </style>
      </div>
       
    </div>
</div>

<style>
    .section-2{
        width: 100%;
        height: auto;
        padding: 50px 0px;
    }

    .row-section-2{
        width: 90%;
        margin: 0px auto;
        height: auto;
    }
    .row-section-2 h2{
        text-align: center;
        font-weight: 700;
        font-family: "Raleway", sans-serif;
        font-size: 32px;
        color:#000;
        font-style: italic;

    }

    @media(min-width:768px){
        .row-section-2 h2{
            font-size: 50px;
        }
    }

    .row-section-2 p {
        text-align: center;
        font-family: "Montserrat", sans-serif;
    }

    .row-section-2 ul{
        width: 100%;
        height: auto;
        padding: 50px 0px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center; 
    }

    @media(min-width:991px){
        .row-section-2 ul{
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 80px 0px;
        }
    }

    .row-section-2 ul li {
        width: 90%;
        margin: 0px auto;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px 0px;
    }

    @media(min-width:991px){
        .row-section-2 ul li {
            width: 32%;

        }
    }

    .row-section-2 ul li img {
        width: 64px;
        height: 64px;
    }

    .row-section-2 ul li h3 {
        font-family: "Raleway", sans-serif;
        font-size: 32px;
        padding: 15px 0px;
        font-weight: 700;
        color:#000;
        font-style: italic;
    }

    .row-section-2 ul li p {
        font-family: "Montserrat", sans-serif;
    }

    .row-boton{
        width: 90%;
        margin: 0px auto;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>