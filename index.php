<!--el head está en layouts en php
Todo esto es para seccionar el codigo en comnponentes, porque hay cosasue no se nodifican-->
<?php include './res/layouts/header.php';?>
<body>
    <header>
        <!--para crear barra de navegación
          navbar-- esto es para crear barras de navegacion-->
        <nav class="navbar has-background-primary has-text-white" role="navegation">
            <!--este navbar-brand para crear logos-->
            <div class="navbar-brand">
                <!--la barrita diagonal hace referencia la inicio-->
               <a class="navbar-item" href="/">
                    <img class="img-logo" src="./res/img/terminadoLogoConser.jpg" alt="logo"
                    width="100%" height="auto">
               </a>

                <!--para hacer el botoncito del responsive en el celular
                role= que un elemento se comporte de cierta forma
                    en este caso para que a se comporte como un botton-->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
                        <!--para darle forma al botton
                        aria hidden es para wue solo se muestre el espacio en blanco
                    y se debe activar con jjava script-->
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                </a>
            </div>
              <!--crear barra de navegacion
                el id lleva el mismo nombre de data target arriba-->
              <div id="navbarBasic" class="navbar-menu">
                <!--para que se vaya a la derecha el contenido-->
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link">
                            Actividades
                        </a>

                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item">
                                Recitales
                            </a>

                            <a href="#" class="navbar-item">
                                Talleres
                            </a>
                        </div>
                    </div>
                   


                    <a href="#" class="navbar-item">
                        Inscripciones
                    </a>
                </div>
            </div>
            <!---->
        </nav>
    </header>
    <main class="has-background-grey-lighter mb-3">
        <div class="container">
            <!--is = tamaño de la letra-->
            <h1 class="has-text-centered title is-1">Conservatorio Nacional</h1>
            <div class="container card mt-3" style="width:70%;">
                <div class="card-image">
                    <figure class="image is-16by9">
                        <img src="./res/img/Portada.webp" alt="conservatorio">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="content">
                        Una institución que promueve el arte y la cultura en Guetemala.
                    
                    </div>
                </div>
               
            </div>
            <div class="columns mt-6">
                <div class="column">
                    
                   <p class=" has-text-centered">
                    <span class="icon is-large ">
                        <i class="fas fa-2x fa-guitar"></i>
                      </span><br/>
                      Conoce cada una de nuestras especialidades</p>
                </div>
                <div class="column">
                    <p class=" has-text-centered">
                        <span class="icon is-large ">
                            <i class="fas fa-2x fa-music"></i>
                          </span><br/>
                        Disfruta de nuestros conciertos </p>
                </div>
                <div class="column">
                   <p class=" has-text-centered"> 
                    <span class="icon is-large ">
                        <i class="fas fa-2x fa-icons"></i>
                      </span><br/>
                    Actividades extracurriculares para todo publico</p>
                </div>
            </div>
            
        </div>
       
    </main>
   <!--llamnando a footer que esta en conmponentesn-->
   <?php include './res/layouts/components/footer.php' ?>
   <script src="./res/js/active.js"></script>
</body>
</html>