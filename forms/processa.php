<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dados Recebidos</h4>
            </div>
            <div class="card-body">
                <?php
                $nome = htmlspecialchars($_POST['nome']);
                $email = htmlspecialchars($_POST['email']);
                $assunto = htmlspecialchars($_POST['assunto']);
                $mensagem = htmlspecialchars($_POST['mensagem']);

                $arquivo = $_FILES['arquivo'];
                $pasta = 'uploads/';
                $nomeArquivo = basename($arquivo['name']);
                $caminhoArquivo = $pasta . $nomeArquivo;

                // Verifica se a pasta 'uploads/' existe, caso contrário, cria
                if (!is_dir($pasta)) {
                    mkdir($pasta, 0777, true);
                }

                // Move o arquivo enviado para a pasta 'uploads/'
                if (move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo)) {
                    echo "<div class='alert alert-success'>Arquivo enviado com sucesso!</div>";
                    echo "<p><a href=\"$caminhoArquivo\" target=\"_blank\" class='btn btn-custom'>Clique aqui para acessar o arquivo</a></p>";
                } else {
                    echo "<div class='alert alert-danger'>Erro ao enviar o arquivo!</div>";
                }

                // Exibe os dados recebidos
                echo "<h2>Informações do Formulário:</h2>";
                echo "<ul class='list-group'>";
                echo "<li class='list-group-item'><strong>Nome:</strong> $nome</li>";
                echo "<li class='list-group-item'><strong>Email:</strong> $email</li>";
                echo "<li class='list-group-item'><strong>Assunto:</strong> $assunto</li>";
                echo "<li class='list-group-item'><strong>Mensagem:</strong> $mensagem</li>";
                echo "</ul>";
                ?>
                <a href="index.php" class="btn btn-custom mt-3">Voltar</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
