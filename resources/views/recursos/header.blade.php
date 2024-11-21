<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     /* Encabezado */
     /* Header */
     .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #FCF0E3;
    }

    .header img {
        max-width: 100px;
        margin-right: auto;
        padding: 0px 100px;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-links a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }

    /* Dropdown Menu para Boletos */
    .dropdown {
        position: relative;
    }

    .dropbtn {
        color: #333;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
        padding: 10px;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    min-width: 200px;
    z-index: 1000;
    }

    .dropdown-content a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s ease;
    }

    .dropdown-content a:hover {
    background-color: #f0f0f0;
    }

    .dropdown:hover .dropdown-content {
    display: block;
    }

    /* Botón de cerrar sesión */
    .logout-button {
    background-color: #f28b82;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    }

    .logout-button:hover {
    background-color: #e57373;
    }
</style>
</head>
<body>
    <div class="header">
        <img src="../ADO-Autobuses-de-Oriente-Logo-700x394.png" alt="ADO Logo">
        <div class="nav-links">
          <a href="../usuario/inicio.html">Inicio</a>
          <!-- Menú desplegable para Boletos -->
          <div class="dropdown">
            <a href="#" class="dropbtn">Boletos</a>
            <div class="dropdown-content">
              <a href="../sesion/compra de boleto.html">Comprar boleto</a>
              <a href="../usuario/cambiar-boleto.html">Cambiar boleto</a>
              <a href="../usuario/cancelar-boleto.html">Cancelar boleto</a>
              <a href="../usuario/ver-boleto.html">Ver boleto</a>
            </div>
          </div>
          <!-- Enlace simple para Perfil -->
             <a href="../usuario/lista-corridas.html">Corridas</a>   <a href="../usuario/perfil.html">Perfil</a>
          <a href="../index.html" class="logout-button">Cerrar Sesión</a>
      </div>  
    </div>
</body>
</html>