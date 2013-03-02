<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Si quieres saber todo sobre la Tortuga Tomasa no puedes perder de vista esta web"> 
    <meta name="keywords" content="tortuga Tomasa, galapago, viaja con su casa" /> 
    <title>Tortuga Tomasa</title>
    
    <link href="http://static.alwaysdata.com/v3/images/favicon.ico" rel="shortcut icon" />
    <link rel="StyleSheet" media="screen" type="text/css" href="./css/css_ppal.css">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>


    <!-- Menu vertical--> 
    <script>
    $(function() {
        $("#menu").menu();

        // Llamada a código directamente desde el menú
        $('#api_tastypie_http_post').on('click', function (){

         alert("Insertamos en la tabla de 'Pendientes' llamando con un HTTP POST a la API.");

         var tmp_tarea_nombre = prompt("Introduzca descripción para tarea:");
         if (!tmp_tarea_nombre)
         {
             alert("Tarea errónea: no puede ser nula. No se ha realizado la inserción.");
         }
         else
         {
           var tmp_tarea_prioridad = prompt("Introduzca prioridad para tarea:");
           if (isNaN(tmp_tarea_prioridad))  
           {
                alert("Prioridad errónea: debe estar formada sólo por números. No se ha realizado la inserción.");
           }
           else
           {
              if (!tmp_tarea_prioridad)
              {
                 alert("Prioridad errónea: no puede ser nula. No se ha realizado la inserción.");
              }
              else
              {

                 $(function(){
                      $.ajax({
                        type: 'POST',
                        url: 'http://asalas.alwaysdata.net/api/v1/pendiente/',
                        data: JSON.stringify({tarea: tmp_tarea_nombre, prioridad: tmp_tarea_prioridad}),
                          contentType: 'application/json',
                        processData:  false,
                            });
                           });

                  var cadena = "curl --user user_api:pass_api --dump-header --H \"Content-Type: application/json\" -X POST --data '{\"tarea\": " + tmp_tarea_nombre + ", \"prioridad\": " + tmp_tarea_prioridad + "}' http://asalas.alwaysdata.net/api/v1/pendiente/"
                   alert("Eso sería equivalente a hacer: " + cadena);
              }
          }
       }
       // Ahora refrescamos la pantalla para mostrar la tarea recien generada
       top.frame_lista.location.reload();
     });
   });
   </script>
   <style>
   .ui-menu { width: 150px; }
   </style>


    <!-- Acordeón -->
    <script>
    $(function() {
        $( "#accordion" ).accordion({
            heightStyle: "content"
        });
    });
    </script>


    <!-- Google Analytics -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36404909-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
</head>

<!--  #################################################################################################################  -->

<body>

   <header id="cabecera">
    <div class="izquierda"><img style="width: 120px; height: 90px;" alt="Tomasa" src="/static/img/logo_tortuga.jpg"></div>
    <hgroup> 
    <h1> Tortuga Tomasa presenta: </h1>
    <h2>Pruebas hosting <span class="resaltado">Alwaysdata.com</span></h2>
    </hgroup>
   </header>
  

   <!-- Menú  vertical -->
   <nav id="menuvertical">
     <ul id="menu">
    <li><a href="http://asalas.alwaysdata.net/admin" target="_blank" title="Acceso al admin de Django">Admin Django</a></li>
    <li><a href="https://admin.alwaysdata.com/login" target="_blank" title="Acceso al panel de administración de Alwaysdata">Admin Always</a></li>
    <li><a href="https://github.com" target="_blank" title="Acceso a la página de Github (sin logar)" >Github</a></li>   
    <li><a href="https://www.google.com/trends" target="_blank" title="Acceso a Google Trends">Google trends</a></li>   
    <li><a href="form_html5.html" target="_blank" title="Ejemplo de validaciones y tipos para forms en HTML5. Devuelve PHP">HTML5-PHP</a></li>
    <li><a href="jquery.html" target="_blank" title="Pruebas jQuery">jQuery</a></li>
    <li><a href="javascript.html" target="_blank" title="Ejemplo javascript">javascript</a></li>            
    <li>
        <a href="#" title="Estilos">Estilos</a>
        <ul>
            <li><a href="estilos_sin_css.html" target="_blank" title="Sin CSS (pocas apariciones)">Sin CSS</a></li>
            <li><a href="estilos_con_css.html" target="_blank" title="Con CSS">Con CSS</a></li>
        </ul>
    </li>
    <li>
        <a href="#" title="Páginas de estadísticas disponibles">Estadísticas</a>
        <ul>
            <li><a href="https://www.google.com/analytics/web/?et=&hl=es&authuser=#dashboard/default/a36404909w64481033p66209803/" target="_blank" title="Acceso a Google Analytics">Analytics</a></li>
            <li><a href="http://stats.alwaysdata.com/index.php?module=CoreHome&action=index&idSite=47507&period=day&date=yesterday#module=Dashboard&action=embeddedIndex&idSite=47507&period=day&date=yesterday&idDashboard=1" target="_blank" title="Acceso a estadísticas Piwik" >Piwik</a></li>
        </ul>
    </li>
    <li class="ui-state-disabled"><a href="#" title="Menú no operativo">Menú privado</a></li>
    <li>
        <a href="#" title="Distintas formas de insertar en BBDD">Altas BBDD</a>
        <ul>
           <li><a href="#" id="api_tastypie_http_post" title="Inserción de tareas mediante llamada a API Tastypie (POST)">Api Tastypie +</a></li>
           <li><a href="http://asalas.alwaysdata.net/altaform" target="_blank" title="Inserción de tareas mediante formulario Django">Form (loga) +</a></li>
           <li><a href="10_form_altabbdd_php.html" target="_blank" title="Inserción de deporte mediante form PHP">Alta form PHP</a></li>    
        </ul>
    </li>
    <li><a href="http://asalas.alwaysdata.net/email_saludo" target="_blank" title="Envío de email mediante formulario Django">Email saludo</a></li>
    <li>
        <a href="#" title="Opciones para logout">logout</a>
        <ul>
            <li><a href="http://asalas.alwaysdata.net/logout_manual" target="_blank" title="Logout manual">Manual</a></li>
            <li><a href="http://asalas.alwaysdata.net/accounts/logout" target="_blank" title="Logout de Django">Django</a></li>
        </ul>
    </li>
   </ul>
   </nav> 

   <!-- Tareas pendientes, columna derecha -->
   <article id="tareas">
      <?php
          // leer datos de usuario y contraseña de la base de datos
          include("00_config_bbdd.php") ;

          // Conexión con el servidor
          mysql_connect($server, $db_user, $db_pass) or die ("error1".mysql_error());

          // Selección de Base de Datos
          mysql_select_db($database) or die ("error2".mysql_error());
         
          echo "Tareas pendientes".'<br/>';
          echo "-------------------------------".'<br/>';

          $i = 0;

          $Sql ="select tarea from apppendiente_pendiente order by prioridad";
          $result = mysql_query( $Sql ) or die("No se puede ejecutar la consulta: ".mysql_error());
          
          while($Rs = mysql_fetch_array($result)) 
          {
              $i = $i + 1;
              echo $i.'.- '.$Rs[0].'<br/><br/>';
          }
      ?> 
   </article>


    <!-- Acordeón -->
    <center>
   <div id="accordion" style="text-align: left; float: center; border: 1px solid grey; width: 450px;">
    <h3>Determinación</h3>
    <center>
    <div> 
       <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/ECcc9gPRZKk" frameborder="0"></iframe>
    </div>
    </center>
    <h3>Zorman - Soy rapero</h3>
    <center>
    <div> 
       <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/Jw0CStnoW5I" frameborder="0"></iframe>
    </div>
    </center>
    <h3>Zorman - Pido perdón</h3>
    <center>
    <div> 
       <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/HKVPs1Fh26s" frameborder="0"></iframe>
    </div>
    </center>
    <h3>Sol y texto</h3>
    <div>
       <p>
          <img style="width: 352px; height: 251px;" alt="El sol" src="/static/img/sol.jpg"> <br />
          Espaaaaaaaaartaco <br />
          Aparcao!
       </p>
    </div>

   </div>
  <br />
  </center>


  <!-- Rectángulo de posicionamiento -->
  <article class="posicionamiento">
      <h3>Taller de posicionamiento:</h3>
      <h4>Histórico de "Titles"</h4>
      <p>El primiero fue <strong>Sandbox en Alwaysdata</strong> con excelentes resultados, y después (19-01-2013) pasó a ser <strong>Tortuga Tomasa</strong>.</p>

        <a href="http://asalas.alwaysdata.net/inicio/hosting-django-gratis.html" target="_blank" title="hosting django gratis">hosting django gratis</a><br>
        <a href="http://asalas.alwaysdata.net/inicio/caravaning-en-europa.html" target="_blank" title="caravaning en europa">caravaning en europa</a>
  </article> 

 

  <footer id="pie">
    <span class="fuente_pie">Visitas:</span>
    <!-- Start of Domino Counter Code -->
    <script type="text/javascript">var dominocounter_a = "always";</script>
    <script type="text/javascript" src="http://www.dominocounter.net/webcounter.js"></script>
    <!-- End of Domino Counter Code -->
    <p><span class="fuente_pie">Powered by:</span> <img style="width: 80px; height: 60px;" alt="Tomasa" src="/static/img/logo_tortuga.jpg"></p>
  </footer> 


</body>

</html>
