<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/form-style.css')}}">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    </head>
    <body>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <i class="devicon-laravel-plain" width="150" height="150"></i>
                Sign Up
            </a>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="/cliente">Cliente
                            <span class="sr-only">(Página atual)</span></a>
                        <a class="nav-item nav-link active" href="/categoria">Categoria
                            <span class="sr-only">(Página atual)</span></a>
                        <a class="nav-item nav-link active" href="/produto">Produto
                            <span class="sr-only">(Página atual)</span></a>
                        <a class="nav-item nav-link active" href="/pedido">Pedido
                            <span class="sr-only">(Página atual)</span></a>
                    </div>
                </div>
            </nav>
        </nav>

        <h1>
            CADASTRO DE PEDIDO
        </h1>

        <form>
            <div class="idpedido">
                <div class="pedidoid">
                    <input type="hidden" class="form-control" id="inputIdpedido">
                </div>

                <div class="pedido">
                    <label for="pedido">Pedido</label>
                    <input type="number" class="form-control" id="inputPedido" placeholder="Pedido">
                </div>

            </div>

            <br/>
            <button type="submit" class="btn btn-primary" id="btn-cadastrar-pedido">Cadastrar</button>
        </form>

        <footer>
            <p>Desenvolvido por: Rennan Moura<br>
                <a href="mailto:rsmoura252@gmail.com">rsmoura252@gmail.com</a>
            </p>
        </footer>
    </body>
</html>