<div class="contenedor-fun">
    <div class="row-fun">
        <?php $titulo_fun = get_field('titulo_fun') ?>
        <h3><?php echo $titulo_fun  ?></h3>
        <?php $texto_fun = get_field('texto_fun') ?>
        <p><?php echo $texto_fun  ?></p>
        <?php $cta_fun = get_field('cta_fun') ?>
        <?php $url_cta_fun = get_field('url_cta_fun') ?>
        <a href="<?php echo esc_url($url_cta_fun) ?>"><?php echo $cta_fun  ?></a>
    </div>
</div>

<style>
    .contenedor-fun {
        width: 100%;
        height: auto;
        padding: 80px 0px;
    }

    .contenedor-fun .row-fun {
        width: 90%;
        margin: 0px auto;
        max-width: 1140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .contenedor-fun .row-fun h3 {
        font-size: 38px;
        font-family: "Raleway", sans-serif;
        font-style: italic;
        font-weight: 700;
        color: #000;
        text-align: center;
    }

    .contenedor-fun .row-fun p {
        font-size: 18px;
        font-family: "Montserrat", sans-serif;
        text-align: center;
    }

    .contenedor-fun .row-fun a {
        margin: 20px 0px;
        width: 220px;
        display: flex;
        text-decoration: none;
        color: #fff;
        font-style: italic;
        font-weight: 700;
        justify-content: center;
        align-items: center;
        <?php $cta_fun_color = get_field('cta_fun_color')  ?>background-color: <?php echo $cta_fun_color  ?>;
        padding: 10px 15px;


    }
</style>