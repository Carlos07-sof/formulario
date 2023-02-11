<html>
<head>
    <title>Calculadora Basica</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
    <link rel="shortcut icon" href="calculator.ico">
    <link href="estilo.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        //Single Page Application
        $(document).ready(function () {
            /*$('#btn1').click(function () {
                $('#btn2').show();
                $('#formu').show();

            });
            $('#btn2').click(function () {
                $('#formu').hide();
                $('#btn2').hide();
            });*/
            $('#ejecutar').click(function () {
                var primerValor = $('#valor1').val();
                var segundoValor = $('#valor2').val();
                var opcionSeleccionada = document.getElementById("aritmetica").value;
                if ($('#valor1').val() == "" || $('#valor1').val() == "Primer numero" || $('#valor2').val() == "" || $('#valor2').val() == "Segundo numero") {
                    alert("Ingrese números en los campos");
                    var resultado = 0;
                }
                else {
                    if (opcionSeleccionada == '') {
                        alert("No selecciono la opcion");
                        var resultado = '';
                    }
                    else {
                        if (opcionSeleccionada == 'suma') {
                            var resultado = parseInt(primerValor) + parseInt(segundoValor);

                        }
                        else if (opcionSeleccionada == 'resta') {
                            if (segundoValor > primerValor) {
                                alert("No se puede obtener numeros negativos");
                                var resultado = 0;
                            }
                            else {
                                var resultado = parseInt(primerValor) - parseInt(segundoValor);
                            }
                        }
                        else {
                            var resultado = parseInt(primerValor) * parseInt(segundoValor);
                        }
                    }
                }
                document.getElementById("resultado").value = resultado;
                $('#valor1').val('');
                $('#valor2').val('');
            });
            
        });
    </script>
</head>
<body>
    <div class="panel-1" id="el1"><B>Calculadora Basica<B></div>
    <br>
    <form class = "formulario" id="formu">
        <input type="number" class="input" id="valor1" name="num1" placeholder="Primer numero"><br><br>
        <input type="number" class="input" id="valor2" name="num2" placeholder="Segundo numero">
        <br><br>
        <label class="selector-form" for="aritmetica"> Operacion:</label>
        <br>
        <select class="selector" id="aritmetica">
            <option value="">Selecciona una opcion </option>
            <option value="suma">Suma</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <br>
       <br>     
        <button type ="button" class ="button1" id="ejecutar">Ejectuar</button>
        <br>
        <label class="selector-form"> Resultado:</label>
        <br>
        <input type="text" class="input" id="resultado" name="num2" placeholder="Total">
    </form>
   <!--- <br>
    <button id="btn1">Activar</button>
    <button id="btn2">Ocultar</button>
    <br--->
</body>

</html>