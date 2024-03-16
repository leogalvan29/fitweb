<div class="section-runner">
    <style>
        .section-runner{
            width: 100%;
            height: auto;
            padding: 60px 0px;
            <?php  $fondo_runner = get_field('fondo_runner')  ?>
            background-color: <?php echo $fondo_runner  ?>;
        }
    </style>
    <div class="row-section-runner">
        <div class="img-runner">
            <?php  $img_runner = get_field('img_runner')  ?>
            <img src="<?php echo esc_url($img_runner['url']) ?>" alt="">
        </div>
        <div class="txt-runner">
           <?php  $titulo_runner = get_field('titulo_runner') ?>
            <h3><?php echo $titulo_runner ?></h3>
            <?php $txt_runner_1 = get_field('txt_runner_1') ?> 
            <p class="parrafo-runner-1"><?php  echo $txt_runner_1  ?></p>
            <?php $txt_runner_2 = get_field('txt_runner_2') ?> 
            <p class="parrafo-runner-2"><?php  echo $txt_runner_2  ?></p>
            <a href="<?php  echo get_theme_mod('url_cta_3')  ?>"><?php  echo get_theme_mod('texto_cta_3')  ?></a>
            <style>
                .txt-runner a {
                    width: 250px;
                    padding: 5px 15px;
                    margin: 30px 0px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-family: "Raleway", sans-serif;
                    text-decoration: none;
                    font-weight: 700;
                    text-transform: uppercase;
                    font-style: italic;
                    color:#fff;
                    background-color: <?php  echo get_theme_mod('color_cta_3') ?>;

                }
            </style>
        </div>
    </div>
    <div class="row-marcas">
         <div class="titulo_marcas">
             <?php  $titulo_marcas = get_field('titulo_marcas') ?>
              <h3><?php  echo $titulo_marcas ?></h3>
         </div>
         <div class="iconos-marcas">
             <?php   $marcas = array(
                'modern'=> $modern = get_field('modern'),
                'youtimes' => $youtimes = get_field('youtimes'),
                'fitnow' => $fitnow = get_field('fitnow'),
                'shape' => $shape = get_field('shape')
             ) ?>
             <?php  foreach ( $marcas as $marca):  ?>
                 <img src="<?php  echo esc_url($marca['url']) ?>" alt="">
             <?php  endforeach ?>   
            
         </div>
    </div>
</div>


<style>

    
    .row-section-runner{
        width: 90%;
        margin: 0px auto;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        padding: 20px 0px;

    }

    @media(min-width:991px){
        .row-section-runner {
            flex-direction: row;
            justify-content: space-between;
        }
    }

    .row-section-runner .img-runner{
        display: flex;
        position: relative;
        background-color: #000;
        width: 90%;
        margin: 0px auto;
        height: auto;
        justify-content: center;
        padding: 30px 0px;
    }

    .row-section-runner .img-runner img {
        border-radius: 50%;
        display: block;
        max-width: 100%;
        height: auto;
    }

    .row-section-runner .img-runner::after{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 100%)
    }
    .row-section-runner .txt-runner {
        width: 90%;
        margin: 0px auto;
        height: auto;
        padding: 30px 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    @media(min-width:991px){
        .row-section-runner .txt-runner {
            align-items: flex-start;
        }
    }

    .row-section-runner .txt-runner h3{
        color:#fff;
        font-family: "Raleway", sans-serif;
        font-size: 48px;
        font-style: italic;
        font-weight: 700;
    }
    .row-section-runner .txt-runner p{
        text-align: justify;
        color:#fff;
    }

    .row-marcas{
                    width: 100%;
                    margin: 0px auto;
                    padding: 50px 0px;
                    height: 600px;
                    background-color: <?php echo get_theme_mod('color_fondo_marcas')  ?>;
                    
                   

                }

                @media(min-width:991px){
                    .row-marcas {
                        height: 300px;
                    }
                }

                

                .titulo_marcas {
                    width: 100%;
                    height: auto;
                }

                .row-marcas h3{
                    font-family: "Montserrat", sans-serif;
                    color:#fff;
                    text-align: center;
                    font-weight: 700;
                    font-size: 24px;
                }

                @media(min-width:768px){
                    .row-marcas h3{
                        font-size: 32px;
                    }
                }

                .iconos-marcas{
                    width: 100%;
                    height: auto;
                    padding: 30px 0px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    align-items: center;
                    height: 400px;
                }

                @media(min-width:991px){
                    .iconos-marcas{
                        flex-direction: row;
                        justify-content: space-between;
                        height: 200px;
                        max-width: 1140px;
                        margin: 0px auto;
                        padding: 10px 0px;
                    }
                }

                .iconos-marcas img {
                    width: 130px;
                    height: 35px;
                }

                @media(min-width:991px){
                    .iconos-marcas img {
                    width: 150px;
                    height: 45px;
                }
                }
</style>