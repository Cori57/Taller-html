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
