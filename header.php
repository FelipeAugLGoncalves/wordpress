<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Aluga Flex</title>
    <?php wp_head();?> <!-- Sem essa função nenhum script funciona e nenhuma folha de estilo carrega, ele sempre deverá ser chamada antes do head finalizar. -->
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-midia-icons col-xl-9 col-sm-7 col-6">social midia icons</div>
                    <div class="search col-xl-3 col-sm-5 col-6">search</div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <section class="logo">logo</section>
            <nav class="menu">this is menu</nav>
        </section>        
    </header>