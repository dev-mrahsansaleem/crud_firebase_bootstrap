
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Como Crear un CRUD con Firebase 7.14.2 y Bootstrap 4 </title> 

    <link rel="icon" href="https://nubecolectiva.com/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/starter-template/starter-template.css" rel="stylesheet">


  </head>
  <body onload="listar();">
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li> 
            </ul>

            <div class="btn-group btodt" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportarmodal">Reportar Error</button>
              <button type="button" onclick="window.open('https://paypal.me/nubecolectiva','_blank')" class="btn btn-warning">Donar</button>
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#compartirmodal">Compartir</button>
              <button type="button" onclick="window.open('http://blog.nubecolectiva.com/como-crear-un-crud-con-laravel-5-6-parte-4-final/','_blank')" class="btn btn-info">Post</button>
              <button type="button" onclick="window.open('https://github.com/collectivecloudperu/crud_laravel_56/','_blank')" class="btn btn-secondary ghbmd">GitHub</button>
            </div>

          </div>
        </div>
      </nav>
    </header>
  
<div class="pccp mb-3 mtpnc" align="center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
    <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
    <main role="main">

        <div class="container mt-5">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4 text-center">Como Crear un CRUD con Firebase 7.14.2 y Bootstrap 4 </h1>

                <div class="header">
                   <div class="container">
                      <div class="row">
                         <div class="col-md-5">
                            <!-- Logo -->
                            <div class="logo">
                               <h2><a href="https://nubecolectiva.com/blog/tutos/demos/laravel56/public/admin/dashboard">Administrador</a></h2>
                            </div>
                         </div>
                         <div class="col-md-5">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="input-group form">
                                     <!--
                                     <input type="text" class="form-control" placeholder="Buscar...">
                                     <span class="input-group-btn">
                                       <button class="btn btn-primary" type="button">Buscar</button>
                                     </span>
                                     -->
                                </div>
                              </div>
                            </div>
                         </div>
                         <div class="col-md-2">
                            <div class="navbar navbar-inverse" role="banner">
                                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                  <ul class="nav navbar-nav">
                                    <li><a href="https://nubecolectiva.com/blog/tutos/demos/laravel56/public/dashboard">Administrador</a></li>
                                  </ul>
                                </nav>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="page-content">
        <div class="row">
          
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="/"> Dashboard</a>
                  </li>
                  <li class="list-group-item">
                    <a href="http://localhost/nc/tutoriales/crud_firebase620_bootstrap4/"> Postres</a>
                  </li>
                  <li class="list-group-item">
                    Opción 1
                  </li>
                  <li class="list-group-item">
                    Opción 2
                  </li>
                  <li class="list-group-item">
                    Opción 3
                  </li>
                  <li class="list-group-item">
                    Opción 4
                  </li>
                  <li class="list-group-item">
                    Opción 5
                  </li>
                  <li class="list-group-item">
                    Opción 6
                  </li>
                  <li class="list-group-item">
                    Opción 7
                  </li>
                  <li class="list-group-item">
                    Opción 8
                  </li>
                  <li class="list-group-item">
                    Opción 9
                  </li>
                  <li class="list-group-item">
                    Opción 10
                  </li>
              </ul>
            </div>
          </div>
        
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Postres</li>
          </ol>
        </nav>
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Postres</h2></div>             
                    
              </div>
                
                <div class="panel-body">

                              <div class="card-block">
                                  
                                  <section class="example mt-4">

                                    <?php 
        
                                        $msg = isset($_GET['mensaje']);

                                        if ($msg == 1) { 

                                          $msgok = $_GET['mensaje'];

                                          echo '<div class="alert alert-success" role="alert">'.$msgok.'</div>';         
                                          
                                        }
                                        else {
                                          //
                                        }       
                                        
                                    ?>    

                                    <a type="button" href="crear.php" class="btn btn-success mb-2">Crear</a>

                                    <div class="datos text-center"></div>                                    

                                  </section>
                              </div>



                </div>

              </div>

          </div>

        </div>

      </div>

      </div>
      </div>              

            </div>

          </div> 

          <!-- Fin Contenido -->     

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="https://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="https://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>            
          
        </div>

    </main>


        <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="https://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Firebase JavaScript SDK -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

    <!-- Firebase Analytics  -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>

    <!-- Firebase Database (Realtime) -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-database.js"></script>

    <script type="text/javascript">
      // Configuración de Firebase 
      var firebaseConfig = {
        apiKey: "Tu apiKey",
        authDomain: "Tu authDomain",
        databaseURL: "Tu databaseURL",
        projectId: "Tu projectId",
        storageBucket: "Tu storageBucket",
        messagingSenderId: "Tu messagingSenderId",
        appId: "Tu appId",
        measurementId: "Tu measurementId",
      };

      // Inicializo Firebase 
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();

      // Hacemos referencia a Firebase Realtime Database 
      var database = firebase.database(); 

      // Variable para el 'id' o key de cada registro 
      var key;

      function listar() {

        // Selecciono los datos desde postres 
        var database = firebase.database().ref().child('postres');
        database.once('value', function(snapshot){
            if(snapshot.exists()){

                var tabla = '';

                tabla += '<div class=table-responsive>';
                tabla += '<table class=table id=datos>';
                tabla += '<thead class=thead-dark>';
                tabla += '<tr>';
                tabla += '<th scope=col>ID</th>';
                tabla += '<th scope=col>Nombre</th>';
                tabla += '<th scope=col>Precio</th>';
                tabla += '<th scope=col>Stock</th>';
                tabla += '<th scope=col>Imagen</th>';
                tabla += '<th scope=col>Acciones</th>';
                tabla += '</tr>';
                tabla += '</thead>';
                tabla += '<tbody>';

                // Loop para recorrer los datos de Firebase Realtime Database 
                snapshot.forEach(function(data){
                    var key = data.key;
                    var nombre = data.val().nombre;
                    var precio = data.val().precio;
                    var stock = data.val().stock;
                    var img = data.val().img;
                    
                    tabla += '<tr>';
                    tabla += '<td>' + key + '</td>'; 
                    tabla += '<td>' + nombre + '</td>'; 
                    tabla += '<td>' + precio + '</td>'; 
                    tabla += '<td>' + stock + '</td>'; 
                    tabla += '<td><img src=' + img + ' class=img-fluid width=30px></td>'; 
                    tabla += '<td><a type="button" href="leer.php?id='+ key +'" class="btn btn-dark mb-2">Ver</a> <a type="button" href="actualizar.php?id='+ key +'" class="btn btn-secondary mb-2">Editar</a> <button type="button" onclick=eliminar(this.value); class="btn btn-danger mb-2" value=' + key + '>Eliminar</button></td>'; 
                    tabla += '</tr>';
                    
                });

                tabla += '</tbody>';
                tabla += '</table>';
                tabla += '</div>';
                //tabla += '<input type=text value='+key+' id=keysel>';

                // Muestro la tabla
                $('.datos').html(tabla);
            }
        });

      }

      function eliminar(val) {

        // Preguntamos al usuario si quiere eliminar el item 
        var result = confirm("Eliminar este item ?");

        if (result) {

            // Pasamos el key del registro a eliminar 
            var keysel = val;   
            //alert(keysel);
            //return false;

            // Eliminamos el item 
            firebase.database().ref('postres/' + keysel).remove();

            // Refrescamos las vista con mensaje 
            var msg = "Eliminado Satisfactoriamente !"; 
            window.location = 'index.php?mensaje=' + msg;

        }

      };


    </script>
    
  </body>

</html>
