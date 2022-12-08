<!--el head está en layouts en php
Todo esto es para seccionar el codigo en comnponentes, porque hay cosasue no se nodifican-->
<?php include './res/layouts/head.php';?>
<body>
    <header>
        <!--para crear barra de navegación
        navbar-- esto es para crear barras de navegacion-->
        <?php include './res/layouts/components/widgets/navbar.php';?>
    </header>
    <main class="has-background-grey-lighter mb-3">
        <div class="container">
            <!--is = tamaño de la letra-->
            <h1 class="has-text-centered title is-1">Conservatorio Nacional</h1>
            <?php include './res/layouts/components/main/cardPrincipal.php';?>
            <?php include './res/layouts/components/main/sectionsIcons.php';?>
            
        </div>
    
    </main>
<!--llamnando a footer que esta en conmponentesn-->
<?php include './res/layouts/components/widgets/footer.php' ?>
<script src="./res/js/active.js"></script>
</body>
</html>