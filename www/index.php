<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Si quieres saber todo sobre la Tortuga Tomasa no puedes perder de vista esta web"> 
    <meta name="keywords" content="tortuga Tomasa, galapago, viaja con su casa" /> 
    <meta name="msvalidate.01" content="DCC5327434D9CE237AFB29419F2B813A" />    
    <title>Tortuga Tomasa</title>
    
    <link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="StyleSheet" media="screen" type="text/css" href="/css/css_ppal.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

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

    <!-- Pestañas -->
    <script>
        $(function() {
          $( "#tabs" ).tabs();
        });
    </script>

</head>

<!--  #################################################################################################################  -->

<body>

   <header id="cabecera">

    <div id="cabizq">
      <img src="/static/img/logo_tortuga.jpg" width="120" height="90" alt="Tortuga Tomasa">
    </div>
    
    <div id="cabdere">    
      <div id="cabdere_caida">    
        <hgroup> 
        <h1>Tortuga Tomasa</h1>
        <h6>(Pruebas hosting <span class="resaltado">Alwaysdata.com</span>)</h6>
        </hgroup>
        </div>
    </div>

 </header>


   <!-- Menú  vertical -->
   <nav id="menuvertical">
     <ul id="menu">
    <li><a href="http://asalas.alwaysdata.net/admin" target="_blank" title="Acceso al admin de Django">Admin Django</a></li>
    <li><a href="https://admin.alwaysdata.com/login" target="_blank" title="Acceso al panel de administración de Alwaysdata">Admin Always</a></li>
    <li><a href="carrusel.html" target="_blank" title="Carrusel">Carrusel</a></li>
    <li class="ui-state-disabled"><a href="#" title="Menú no operativo">Menú privado</a></li>
    <li>
        <a href="#" title="Páginas de estadísticas y Webmasters Tools">Stats & Admin</a>
        <ul>
            <li><a href="https://www.google.com/webmasters/tools" target="_blank" title="Google WMT">Google WMT</a></li>
            <li><a href="http://www.bing.com/toolbox/webmaster" target="_blank" title="Bing WMT">Bing WMT</a></li>
            <li><a href="https://www.google.com/analytics/web/?et=&hl=es&authuser=#dashboard/default/a36404909w64481033p66209803/" target="_blank" title="Acceso a Google Analytics">Analytics</a></li>
            <li><a href="http://stats.alwaysdata.com/index.php?module=CoreHome&action=index&idSite=47507&period=day&date=yesterday#module=Dashboard&action=embeddedIndex&idSite=47507&period=day&date=yesterday&idDashboard=1" target="_blank" title="Acceso a estadísticas Piwik" >Piwik</a></li>
        </ul>
    </li>
    <li>
        <a href="#" title="Pruebas de código">Pruebas</a>
        <ul>
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
        </ul>
    </li>
    <li><a href="https://github.com" target="_blank" title="Acceso a la página de Github (sin logar)" >Github</a></li>   
    <li><a href="https://www.google.com/trends" target="_blank" title="Acceso a Google Trends">Google trends</a></li>   
    <li>
        <a href="#" title="Distintas formas de insertar en BBDD">Altas BBDD</a>
        <ul>
           <li><a href="#" id="api_tastypie_http_post" title="Inserción de tareas mediante llamada a API Tastypie (POST)">Api Tastypie +</a></li>
           <li><a href="http://asalas.alwaysdata.net/altaform" target="_blank" title="Inserción de tareas mediante formulario Django">Form (loga) +</a></li>
           <li><a href="10_form_altabbdd_php.html" target="_blank" title="Inserción de deporte mediante form PHP">Alta form PHP</a></li>    
        </ul>
    </li>
    <li><a href="http://asalas.alwaysdata.net/email_saludo" target="_blank" title="Envío de email mediante formulario Django">Email saludo</a></li>
    <li><a href="http://antosalas.wix.com/tortuga-tomasa" target="_blank" title="Pruebas Wix">Wix</a></li>
    <li><a href="doc/tomasa_general.html" target="_blank" title="Doc Sphinx">Doc Sphinx</a></li>
    <li>
        <a href="#" title="Opciones para logout">logout</a>
        <ul>
            <li><a href="http://asalas.alwaysdata.net/logout_manual" target="_blank" title="Logout manual">Manual</a></li>
            <li><a href="http://asalas.alwaysdata.net/accounts/logout" target="_blank" title="Logout de Django">Django</a></li>
        </ul>
    </li>
   </ul>
   </nav> 


   <article id="song_in_index">
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br><br>
                    Todas las mañanas la tenemos que esperar, <br>
                    Que se pinte las pestañas con carbón del encinar <br>
                    que se limpie las patitas con jazmín y flor de azahar <br>
                    que se mire y se remire en el espejo por demás. <br><br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br><br>
                    Todas las mañanas la tenemos que esperar, <br>
                    que repase los deberes con su pluma de faisán <br>
                    una hora de gimnasia con su footing matinal <br>
                    desayune cinco almendras con un zumo de nogal. <br><br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br><br>
                    Y una moraleja le tenemos que aguantar <br>
                    cuando hay prisa andar despacio, nos repite sin cesar <br>
                    caminando lentamente a la meta arribarás <br>
                    es mejor llegar más tarde que quizás nunca llegar. <br><br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br>
                    La Tortuga Tomasa viaja con su casa <br>
                    y aunque se retrasa, siempre llegará. <br><br>

          <hr>

          <table width="100%">
          <tr>
             <td><a href="http://asalas.alwaysdata.net/tortuga-tomasa-cancion" target="_blank" title="Canción Tortuga Tomasa">Canción Tortuga Tomasa</a></td>
             <td><a href="http://asalas.alwaysdata.net/tortuga-tomasa-letra" target="_blank" title="Letra Tortuga Tomasa">Letra Tortuga Tomasa</a></td>
          </tr>
          <tr>
             <td><a href="http://asalas.alwaysdata.net/tortuga-tomasa-asociaciones" target="_blank" title="Asociaciones Tortuga Tomasa">Asociaciones Tortuga Tomasa</a></td>
             <td><a href="http://asalas.alwaysdata.net/tortuga-tomasa-objetivo" target="_blank" title="Objetivo Tortuga Tomasa">Objetivo Tortuga Tomasa</a> </td>
          </tr>
          </table>

   </article>
 
   <!-- Tareas pendientes, columna derecha -->
   <article id="tareas">
      <?php
          // leer datos de usuario y contraseña de la base de datos
          include("00_config_bbdd.php") ;

          // Conexión con el servidor
          mysql_connect($server, $db_user, $db_pass) or die ("error1".mysql_error());

          // Selección de Base de Datos
          mysql_select_db($database) or die ("error2".mysql_error());
         
          echo "Tareas pendientes".'<br>'.'<hr>';
          $i = 0;

          $Sql ="select tarea, id from apppendiente_pendiente order by prioridad";
          $result = mysql_query( $Sql ) or die("No se puede ejecutar la consulta: ".mysql_error());
          
          while($Rs = mysql_fetch_array($result)) 
          {
              $i = $i + 1;
              echo $i.'.- '.$Rs[0].' <a href="http://asalas.alwaysdata.net/admin/apppendiente/pendiente/'.$Rs[1].'" target="_blank" title="Acceso a esta tarea en el admin">Ver</a>'.'<br><br>';
          }
      ?> 
   </article>

    <!-- Acordeón -->
    <center>
   <div id="accordion">
    <h3>Tortuga Tomasa by Teresa Rabal</h3>
        <div> 
           <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/s1qopL4hu-s" frameborder="0"></iframe>
        </div>
    <h3>Zorman - Soy rapero</h3>
        <div> 
           <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/Jw0CStnoW5I" frameborder="0"></iframe>
        </div>
    <h3>Zorman - Pido perdón</h3>
        <div> 
           <iframe class="youtube-player" type="text/html" width="380" height="250" src="http://www.youtube.com/embed/HKVPs1Fh26s" frameborder="0"></iframe>
        </div>
    <h3>Sol y texto</h3>
        <div>
           <p>
              <img style="width: 352px; height: 251px;" alt="El sol" src="/static/img/sol.jpg"> <br />
              Espaaaaaaaaartaco <br />
              Aparcao!
           </p>
        </div>
   </div>
  <br>
  </center>


  <div id="tabs">
  <ul>
  <li><a href="#tabs-1">Acordeón de vídeos</a></li>
  <li><a href="#tabs-2">Secuencia de fotos</a></li>
  <li><a href="#tabs-3">Taller de posicionamiento</a></li>
  </ul>
  <div id="tabs-1">
     <p>Aquí acordeón.</p>
  </div>
  <div id="tabs-2">
        <p>Por construir.</p>
  </div>
  <div id="tabs-3">

    <!-- Rectángulo de posicionamiento -->
    <article class="posicionamiento">
        <h4>Histórico de títulos y expresiones</h4>
        <p>El primero fue <strong>Sandbox en Alwaysdata</strong> con excelentes resultados. El 19 de enero de 2013 pasó a ser <strong>Tortuga Tomasa</strong>.</p>
        <p>El 18 de marzo de 2013, las expresiones pasan a estar relacionadas sólo con <strong>Tortuga Tomasa</strong>.</p>
    </article> 

  </div>
  </div>

 <br>
  
  <footer id="pie">
    
    <div id="pieizq">
        <div id="centrado_manual">
            <span class="fuente_pie">Visitas:</span>
            <!-- Start of Domino Counter Code -->
            <script type="text/javascript">var dominocounter_a = "always";</script>
            <script type="text/javascript" src="http://www.dominocounter.net/webcounter.js"></script>
            <!-- End of Domino Counter Code -->
        </div>
    </div>

   
    <div id="piedere">    
        <p><span class="fuente_pie">Powered by:</span> <img style="width: 80px; height: 60px;" alt="Tortuga Tomasa" src="/static/img/logo_tortuga.jpg"></p>
    </div>

    <div class="piebajo">
       Copyleft ((cc)) Tortuga Tomasa 
    </div>

  </footer> 


</body>

</html>
