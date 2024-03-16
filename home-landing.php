<?php  
/*
*Template Name: Fit Landing 
*/

?>

<?php  get_header() ?>



<div class="section-1">
   <div class="row-section-1">
       <?php  $titulo_1 = get_field('titulo_1')   ?>
       <h1 class="titulo_1"><?php echo $titulo_1   ?></h1>
       <style>
         .titulo_1 {
            <?php  $color_titulo_1 = get_field('color_titulo_1') ?>
            color: <?php  echo $color_titulo_1 ?> ;
            <?php $tamano_titulo_1 = get_field('tamano_titulo_1') ?>
            font-size: <?php  echo $tamano_titulo_1  ?>px;
            text-align:center;
            font-family: "Montserrat", sans-serif;
            font-style: italic ;
         }

         @media(min-width:768px){
            .titulo_1{
                <?php  $tamano_titulo_desktop = get_field('tamano_titulo_desktop') ?>
                font-size:<?php  echo $tamano_titulo_desktop  ?>px;
                font-family: "Montserrat", sans-serif;
                
            }
         }
       </style>
   </div>
</div>

<style>
    .section-1{
        background-image: url('<?php echo  esc_url(get_theme_mod('imagen_section_1'))?>');
        width: 100%;
        height: 400px;
        background-repeat: no-repeat;
        background-size: cover;
    }

   .section-1 .row-section-1{
        width: 90%;
        margin: 0px auto;
        height: inherit;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>


<!--  Seccion 2   -->
<?php  echo get_template_part('template-parts/content-section2'); ?>

<!--  Seccion 3   -->
<?php  echo get_template_part('template-parts/content-runner') ?>

<!--  Section Marcas  -->
<?php echo get_template_part('template-parts/content-fun') ?>

<?php  get_footer()  ?>