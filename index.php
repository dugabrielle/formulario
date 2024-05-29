<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: url(./folhas.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            font-size: 1.2rem;
            position: relative;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            filter: blur(4px); 
            z-index: -1;
        }

        span {
            color: white;
            font-weight: bold;
        }

        div {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

        #emailTrue {
            font-size: 0.9rem;
            font-weight: normal;
        }

        h1 {
            color: white;
        }

        .form-select {
            height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1rem;
        }

        .form-control {
            height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1rem;
            max-height: 200px;
            overflow-y: auto;
        }

        .btn1 {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100">

            <h1 class="text-center mb-5">Contato</h1>

            <form action="dados.php" method="post">

            <div class="form-group">
                    <div class="col-md-4 offset-md-4">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" maxlength="30"> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 offset-md-4">
                        <label for="email" class="col-form-label">Endereço de e-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailTrue" placeholder="nome@exemplo.com">
                        <small id="emailTrue" class="form-text text-muted"><span>Insira um e-mail válido.</span></small>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 offset-md-4">
                        <label for="telefone" class="col-form-label">Celular:</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="99999999999" pattern="\d{11}" maxlength="11" title="Formato válido: 11 dígitos sem espaços ou símbolos" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 offset-md-4">
                        <label class="pb-1" for="mensagem">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" maxlength="500" placeholder="Digite sua mensagem (limite de 500 caracteres)"></textarea>
                    </div>
                </div>

                <div class="col-md-4 offset-md-4">
                    <div class="col-auto my-2 pt-1">
                        <label class="pb-1" for="select">Identidade:</label>
                        <select class="custom-select mr-sm-1 form-select" id="select" name="identidade">
                            <option selected>Selecionar</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                    
                    <button type="submit" name="enviar" class="btn btn-light col-md-4 my-2 pt-1"><span class="btn1">Enviar</span></button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
