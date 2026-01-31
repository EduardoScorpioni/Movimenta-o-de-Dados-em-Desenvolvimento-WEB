<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Upload de Arquivos</title>
    <style>
        /* CSS fornecido */
        .form {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
            background: linear-gradient(to bottom, #0077be, #3b8df2);
            border-radius: 10px;
            overflow: hidden;
            perspective: 1000px;
            transform-style: preserve-3d;
            transform: rotateX(-10deg);
            transition: all 0.3s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                        rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
                        rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            animation: form-animation 0.5s ease-in-out;
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }

        @keyframes form-animation {
            from {
                transform: rotateX(-30deg);
                opacity: 0;
            }
            to {
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        .input {
            padding: 10px;
            border-radius: 5px;
            background-color: transparent;
            transition: all 0.3s ease-in-out;
            transform-style: preserve-3d;
            backface-visibility: hidden;
            color: #fff;
            border: 2px solid #3b8df2;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                        rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
                        rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .input::placeholder {
            color: #fff;
        }

        .input:hover,
        .input:focus {
            border-color: #3b8df2;
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05) rotateY(20deg);
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            outline: none;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #3b8df2;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transform-style: preserve-3d;
            backface-visibility: hidden;
            transform: rotateX(-10deg);
            transition: all 0.3s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
                        rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
                        rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        button:hover {
            background-color: #0077be;
            font-size: 17px;
            transform: scale(1.05) rotateY(20deg) rotateX(10deg);
        }

        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #0077be;
        }
    </style>
</head>
<body>

    <h2>Upload de Arquivos</h2>

    <form class="form" method="post" action="enviar.php" enctype="multipart/form-data">
        <label style="color:white">Arquivo 1:</label>
        <input class="input" type="file" name="Arquivo" required>

        <label style="color:white">Arquivo 2:</label>
        <input class="input" type="file" name="Arquivo2" required>

        <label style="color:white">Arquivo 3:</label>
        <input class="input" type="file" name="Arquivo3" required>

        <label style="color:white">Arquivo 4:</label>
        <input class="input" type="file" name="Arquivo4" required>

        <label style="color:white">Arquivo 5:</label>
        <input class="input" type="file" name="Arquivo5" required>

        <label style="color:white">Arquivo 6:</label>
        <input class="input" type="file" name="Arquivo6" required>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
