<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #022e5eff;
            color: white;
        }
        header{
            display: flex;
            justify-content: center;
        }
        form{
            width: 30%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        main h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestor de productos</h1>
    </header>
    <main>
        <h2>Ingresar productos</h2>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria">
            <label for="proveedor">Proveedor</label>
            <input type="text" name="proveedor">
            <label for="stock">Stock</label>
            <input type="number" name="stock">

            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>