
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LAMUN 2019</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>

    <h1>LAMUN XXXII</h1>
    <p>Formato de Registro para participantes</p>
    <div>
        <form method="post" action="connection.php">
            <input type="text" id = "nombre" name="nombre" placeholder="Nombre(s)">
            <input type="text" id = "apellidos" name="apellidos" placeholder="Apellidos">
            <label>Edad</label>
            <select name="Age">
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
            <label>Sexo</label>
            <select name="Sex">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            <input type="email" name="correo" placeholder="Correo Electronico">
            <label>Tipo de Sangre</label>
            <select name="sangre">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
            </select>
            <input type="text" name="escuela" placeholder="Escuela">
            <textarea name="alergias" placeholder="Alergias y/o Situación Medica"></textarea>
            <select name="delegacion">
                <option value = "1">Delegacion1</option>
                <option value = "2">Delegacion2</option>
            </select>
            <select name="pais">
                    <option value = "mexico">México</option>
                    <option value = "usa">USA</option>
                </select>
            <input type="submit" name="submit" value="Insertar"/>
           
        </form>
    </div>
</body>
</html>