<html>
<head>
    <title>Equipo de futbol</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
    <link rel="shortcut icon" href="soccerball.ico">
    <link href="estilo.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        var counter = 1;
        var newEntrada;
        $(document).ready(function() {
           /* $("#btn1").click(function() {
                $(".box").animate({
                    width: "300px",
                    height: "300px",
                    marginleft: "150px",
                    borderwidth: "10px",
                    opacity: 0.5
                });
            });*/
            $("#btn2").click(function() {
                newEntrada = `<div id="row">`+
                `<label for="entrada1" class="jugador">Jugador: ${counter++} </label>`+
                `<input type="text" class="m-input" placeholder="Nombre del Jugador" size="20">`+
                `<button type="button" id="btn3" class="btn-eliminar"> <span class = "boton_text_eliminar">X</span>
                </button></div><br>`;
                $('#contenedor').append(newEntrada);
            });
            $("body").on("click", "#btn3", function() {
                counter--;
                $(this).parents('#row').remove();
                //actualizarContador();
            });
            const actualizarContador = () =>{
                console.log("entro");
                var numElementos = $("#row").children().length;

                for (let i = 1; i < counter; i++) {
                    console.log("entro 2");
                    var nuevoContenido = newEntrada;
                }
                $('#contenedor').append(nuevoContenido);
            }
        });
    </script>
</head>
<body>
    <div>
        <h1>Practica 3</h1>
        <br>
    </div>  
    <div class="box">
        <form>
            <label for= "equipo">Equipo de Futbol</label>
            <br><br>
            <input type="text" name="" id = "equipo" placeholder="Equipo de futblo" size="18">
            <br><br>
            <button type="button" id="btn2" class = "boton">
                <span class = "boton_text">Añadir Jugadores</span>
            </button>
        </form>
        <div id="contenedor"></div>
    </div>
</body>
</html>