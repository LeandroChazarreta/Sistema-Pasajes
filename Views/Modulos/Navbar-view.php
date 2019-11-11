Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@andrea-nd 
1
11LeandroChazarreta/Sistema-Pasajes
 Code Issues 0 Pull requests 0 Projects 0 Wiki Security Insights
Sistema-Pasajes/Views/Modulos/Navbar-view.php
 Leandro Agregado turnos
54277df yesterday
41 lines (39 sloc)  2.02 KB
  
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links">Cuenta </a></li>
                <li class="upper-links"><a class="links"> Vuelos</a></li>
                <li class="upper-links"><a class="links" href="./medico"> Medico </a></li>
                <li class="upper-links"><a class="links"> Ofertas </a></li>
                <li class="upper-links"><a class="links"> Ayuda </a></li>
                <li class="upper-links">
                    <a class="links" href="#">
                        <svg class="" width="10px" height="8px" style="overflow: visible;">
                            <i class="material-icons">notifications</i>
                        </svg>
                    </a>
                </li>
                <li class="upper-links"><a class="links" href="./Controller/session_destroy.php">Cerrar sesión</a></li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ GauchoRocket</span></h2>
                <h1 style="margin:0px;"><span class="largenav"><a href="./" class="Ecommerce"> GauchoRocket </a></span></h1>
            </div>
            <div id="mySidenav" class="sidenav">
                <div class="container" style="background-color: #000000; padding-top: 10px;">
                    <span class="sidenav-heading">Home</span>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </div>
                <a class="menur" href="#">Cuenta</a></li>
                <a class="menur" href="#">Historial</a></li>
                <a class="menur" href="#">Ofertas</a></li>
                <a class="menur" href="#">Vender</a></li>
                <a class="menur" href="#">Ayuda</a></li>
                <a class="links" href="index.php">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>
