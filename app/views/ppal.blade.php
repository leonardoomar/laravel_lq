<html>
    <head>
            <title>GTurnos</title>
            <link rel="Stylesheet" href="../../assets/css/bootstrap.css">
            <link rel="Stylesheet" href="../../assets/css/default.css">
            <script src="../../assets/js/jquery.js"></script>
            <script src="../../assets/js/bootstrap.js"></script>
            <script src="../../assets/js/twitter-bootstrap-hover-dropdown.min.js"></script><!--submenues-->		
    </head>
    <body style="padding-top: 60px;"><!-- para evitar que la barra de menu (que esta fija) tape el contenido, se agrega esta sentencia style="padding-top: 60px;"-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!--comienza la barra de menu-->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="/">Inicio</a></li>						  

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a role="menuitem" href="altaPaciente">Alta</a></li>
                            <li class=""><a href="bajaPaci">Baja</a></li>
                            <li class=""><a href="buscaPaci">Modificacion</a></li>
                        </ul>
                    </li>			

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listados<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="jsonPaci">Pacientes</a></li>
                        </ul>
                    </li>				  
                </ul>

            </div>

        </nav>
        
        @yield('contenido')        
        
    </body>
</html>

    

