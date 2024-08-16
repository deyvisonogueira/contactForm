<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Formulário de Contato</h4>
            </div>
            <div class="card-body">
                <form action="processa.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto:</label>
                        <input type="text" class="form-control" id="assunto" name="assunto" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="arquivo">Enviar Arquivo:</label>
                        <input type="file" class="form-control-file" id="arquivo" name="arquivo" required>
                    </div>
                    <button type="submit" class="btn btn-custom">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
