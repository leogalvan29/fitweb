<?php   
/*
*Template Name: Program Landing
*/

?>

<?php  get_header()  ?>

<div class="contenedor-programs-1">
    <div class="row-programs-1">
         <div class="titulo_programs-1">
             <?php  $titulo_programs_1 = get_field('titulo_programs_1')  ?>
             <h3><?php echo $titulo_programs_1  ?></h3>
         </div>
         <div class="txt-programs-1">
            <?php  $texto_programs_1 = get_field('texto_programs_1')  ?>
            <p><?php  echo $texto_programs_1 ?></p>
            <div class="textos-contacto">
                 <?php   $adress_programs = get_field('adress_programs') ?> 
                 <?php  if($adress_programs) : ?>
                    <p><?php  echo $adress_programs  ?></p>
                      <?php  else: ?>
                        <p>Ingresa la direccion</p>
                  <?php endif; ?>  
                
                 <?php   $tel_programs = get_field('tel_programs') ?> 
                 <?php  if($tel_programs):  ?>
                 <p class="tel-contacto"><?php echo $tel_programs  ?></p>
            
                   <?php else:  ?>
                    <p>6674157897</p>
                 <?php endif; ?>
            </div>
         </div>
    </div>
</div>

<div class="programs">
    <style>
        .programs {
            width: 100%;
            height: auto;
            padding: 50px 0px;
            background-color: #f4f4f4;
        }
    </style>
     <div class="row-programs">
        <?php  $args = array(
            'post_type' => 'programs',
            'post_per_page' => 30,
            'order_by' => 'title',
            'order' => 'ASC'
        );?>
        
        <style>
            .row-programs{
                width: 90%;
                margin: 0px auto;
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
            }

            @media(min-width:991px){
                .row-programs{
                    width: 90%;
                    margin: 0px auto;
                    max-width: 1140px;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    
                }
            }
        </style>
            <?php  $programs = new WP_Query($args) ?>
            
           <?php while($programs->have_posts()) : $programs->the_post() ?>
            <div class="card-program">

                <?php   $titulo_programa = get_field('titulo_programa')   ?>
                <?php if($titulo_programa):  ?>
                    <h2><?php  echo $titulo_programa ?></h2>
                  <?php  else:  ?>
                    <h2>Ingresa el titulo del programa</h2>
                 <?php  endif;  ?>
                
                <?php  $texto_programa = get_field('texto_programa') ?>
                <?php  if($texto_programa) : ?>
                    <p><?php echo  $texto_programa ?></p>
                  <?php  else: ?>  
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <?php  endif; ?>

                <?php  $cta_programa = get_field('cta_programa')  ?>
                <a href="<?php the_permalink() ?>"><?php  echo $cta_programa ?></a>
               
             <style>

                 .card-program {
                    padding: 30px 0px;
                 }

                 @media(min-width:991px){
                       .card-program{
                        width: 32%;
                       }
                 }
                .card-program h2 {
                    font-family: "Raleway", sans-serif;
                    color: #000;
                    font-weight: 700;
                    font-style: italic;
                    font-size: 26px;
                }

                .card-program p{
                    font-family: "Montserrat", sans-serif;
                }

                .card-program a{
                    text-decoration: none;
                    text-transform: uppercase;
                    font-style: italic;
                    color:#ff4100;
                    font-weight: 700;
                    font-size: 20px;
                }
             </style>
            </div>

            <?php endwhile; wp_reset_postdata()  ?>
        
     </div>
</div>
  

<style>
    .contenedor-programs-1{
        width: 100%;
        height: auto;
        padding: 50px 0px;
    }

    .contenedor-programs-1 .row-programs-1{
        width: 90%;
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: flex-start;
        max-width: 1140px;
    }

    @media(min-width:991px){
        .row-programs-1{
            flex-direction: row;
            justify-content: space-between;
        }
    }
    .titulo_programs-1 h3{
        font-size: 38px;
        font-family: "Raleway", sans-serif;
        color: #000;
        font-weight: 700;
        font-style: italic;
    }

    .txt-programs-1{
        font-family: "Montserrat", sans-serif;
    }

    .textos-contacto{
         margin-top: 20px;
    }

    .tel-contacto{
        color:#ff4100;
        font-weight: 700;
    }
</style>



<?php  get_footer() ?>