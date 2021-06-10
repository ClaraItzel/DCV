<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCV</title>
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,200;1,500;1,700&family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="librerias/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="color">
        <div class="contenedor">
            <div class="barra">
                <a href="index.html" class="logo">
                    <h1 class="logo__nombre no-margin centrar-texto">DCV <span class="logo__bold">a distancia</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="contacto.html" class="navegacion__enlace">Directorio</a>
                    <a href=# class="navegacion__enlace">Egresados</a>
                    <a href="encuesta.html" class="navegacion__enlace">Encuesta SUAyED</a>
                    <a href="Incripcion20212.html" class="navegacion__enlace">Inscripcion</a>
                    <a href="PrimerIngreso2021.html" class="navegacion__enlace">Primer Ingreso</a>
                </nav>
             </div>
        </div>
            <div class="header__texto">
                <h2 class="no-margin espaciado">Diseño y comunicación visual a distancia</h2>
                <p class="no-margin"> Sistema de gestión del alumnado
                </p>
            </div>
        </div>
    </header>
        <main class="contenedor"> 
            <h3 class="centrar-texto"></h3>
                <div class="contacto-bg">
                    
                </div>
                <form class="formulario">
                    <h1 class="centrar-texto">Directorio</h1>
                    <div class="campo">
                        <label class="campo__label" for="buscar">Buscar</label>
                            <input class="campo__field" type="text" placeholder="Ingrese numero de cuenta" id="buscar">
                    </div>
                    <div class="campo linea">
                        <input type="submit" 
                            value="Buscar" 
                            class="boton boton--secun">
                    </div>
                    
                    <div class="container">
                        <div id="directorioTabla"></div>
                    </div> 
                </form>
            
        </main>
            
        </div>
    <footer class="footer">
        <div class="contenedor"> 
            <div class="barra">
                <a href="index.html" class="logo">
                    <h1 class="logo__nombre no-margin centrar-texto">DCV <span class="logo__bold">a distancia</span></h1>
                </a>
             </div>
             <script src="js/modernizr.js"></script>
</footer>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('#directorioTabla').load("directorioTabla.php");
    });

</script>