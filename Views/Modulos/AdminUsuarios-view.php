<body id="page-top">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">



            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Ecommerce</span></h2>
                <h1 style="margin:0px;"><span class="largenav"> <a href="" class="Ecommerce"> Ecommerce </a></span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input class="flipkart-navbar-input col-xs-13" type="" placeholder="  Buscar productos, marcas, y más" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <i class="material-icons">search</i>  </button>
                </div>
            </div>
            <div class="cart col-xs-1 carrito">
                <a class="cart col-xs-1">
                    <i class="material-icons">shopping_cart</i>  </button>
                    <span class="item-number ">0</span>
                </a>
            </div>
        </div>
        <a class="menulogin" href="#">Productos</a></li>
        <a class="menulogin" href="../Modulos/UsuariosAdmin">Usuarios</a></li>
    </div>
</div>


<div class="card-header">
    <h3 class="mb-0">Usuarios registrados</h3>
</div>


<div class="row admin">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="cdiard rounded-0">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Provincia</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Domicilio</th>
                                <th scope="col">Numero</th>
                                <th scope="col">Admin</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require_once ("./Controller/UsuarioController.php");
                            foreach ($MostrarUsuarios as $linea) {
                                echo ' 		      <tr>
                                <th scope="row">'  .$linea["id_usuario"]. '</th>
                                <td>'  .$linea["nom_usuario"]. '</td>				        
                                <td>'  .$linea["mail"]. '</td>
                                <td>'  .$linea["nombre"]. '</td>
                                <td>'  .$linea["apellido"]. '</td>
                                <td>'  .$linea["provincia"]. '</td>				        
                                <td>'  .$linea["localidad"]. '</td>
                                <td>'  .$linea["calle"]. '</td>
                                <td>'  .$linea["nro"]. '</td>
                                <td>'  .$linea["admin"]. '</td>                      
                              </tr>';
                            }       ?>
                            </tbody>
                        </table>
                    </div>



                </div></div></div></div></div>


</body>