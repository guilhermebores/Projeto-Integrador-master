<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo geral para a página de boas-vindas */
        body {
            background-color: #121212; /* Fundo escuro */
            font-family: 'Arial', sans-serif; /* Fonte limpa e moderna */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Container centralizado para o conteúdo */
        .welcome-container {
            background-color: #1e1e1e; /* Fundo escuro mais suave */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        .welcome-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #4e6e89; /* Azul escuro */
        }

        .welcome-container p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #e0e0e0; /* Cor clara */
        }

        /* Estilo para os botões */
        .btn-custom {
            background-color: #4e6e89;
            border-color: #4e6e89;
            color: #fff;
            padding: 12px 25px;
            margin: 10px;
            font-size: 1rem;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            width: auto;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2e4b5b; /* Cor mais escura no hover */
            border-color: #2e4b5b;
            transform: scale(1.05); /* Aumenta o botão ao passar o mouse */
        }

        .btn-custom:focus {
            outline: none; /* Remove o contorno */
            box-shadow: 0 0 10px rgba(78, 110, 137, 0.6); /* Sombra no foco */
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>{{ __('Bem-vindo') }}</h1>
        <p>{{ __('Escolha uma opção para acessar o sistema:') }}</p>
        <a href="{{ route('login') }}" class="btn btn-custom">{{ __('Login') }}</a>
        <a href="{{ route('register') }}" class="btn btn-custom">{{ __('Registro') }}</a>
    </div>
</body>
</html>
