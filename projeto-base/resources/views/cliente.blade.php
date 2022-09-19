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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    </head>
    <body>

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

            <h1>CADASTRO DE CLIENTES</h1>

            <form action="{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
                <div class="first-group">
                    <div class="personal-informations">
                        <label for="Nome">Nome</label>
                        <input type="text" class="form-control" name ="txNome" placeholder="Nome">
                    </div>

                    <div class="date">
                        <label for="Date">Data de nascimento</label>
                        <input type="Date" class="form-control" name ="txData" placeholder="DD/MM/AAAA">
                    </div>

                    <div class="marital-status">
                        <label for="Estado-Civil">Estado Civil</label>
                        <select name="txEstadoCivil" class="form-control">
                            <option selected="selected">Escolher...</option>
                            <option>Solteiro(a)</option>
                            <option>Casado(a)</option>
                            <option>Separado(a)</option>
                            <option>Divorciado(a)</option>
                            <option>Viúvo(a)</option>
                        </select>
                    </div>
                </div>

                <div class="second-group">
                    <div class="address">
                        <label for="inputAddress">Endereço</label>
                        <input
                            type="text"
                            class="form-control"
                            name="txEndereco"
                            placeholder="Rua dos Bobos">
                    </div>
                    <div class="number">
                        <label for="inputNumber">Número</label>
                        <input
                            type="text"
                            class="form-control"
                            name="txNumero"
                            placeholder="101">
                    </div>
                    <div class="complement">
                        <label for="inputAddress2">Complemento</label>
                        <input
                            type="text"
                            class="form-control"
                            name="txComplemento"
                            placeholder="Apartamento, hotel, casa, etc.">
                    </div>
                </div>

                <div class="thrid-group">
                    <div class="city">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" name="txCidade">
                    </div>
                    <div class="state">
                        <label for="inputEstado">Estado</label>
                        <select name="txEstado" class="form-control">
                            <option selected="selected">Escolher...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </div>
                    <div class="cep">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" name="txCep">
                    </div>
                </div>
            </div>

            <div class="fourth-group">
                <div class="rg">
                    <label for="inputRg">RG</label>
                    <input type="text" class="form-control" name="txRg" placeholder="00.000.000-X">
                </div>
                <div class="cpf">
                    <label for="inputCpf">CPF</label>
                    <input
                        type="text"
                        class="form-control"
                        name="txCpf"
                        placeholder="000000000/00">
                </div>
            </div>

            <div class="fifth-group">
                <div class="email">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" name="txEmail" placeholder="Email">
                </div>
                <div class="telefone">
                    <label for="inputTelefone">Telefone</label>
                    <input
                        type="tel"
                        class="form-control"
                        name="txTelefone"
                        placeholder="Telefone">
                </div>
                <div class="cellphone">
                    <label for="inputCellphone">Celular</label>
                    <input type="tel" class="form-control" name="txCelular" placeholder="Celular">
                </div>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary" id="btn-cadastrar-cliente">Entrar</button>
        </form>

        <br />

        <div class="tableCli">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Estado Civil</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Número</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Fone</th>
                    <th scope="col">Celular</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $cli)

                <tr>
                    <td>{{$cli->idCliente}}</td>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->dtNasc}}</td>
                    <td>{{$cli->estadoCivil}}</td>
                    <td>{{$cli->endereco}}</td>
                    <td>{{$cli->numero}}</td>
                    <td>{{$cli->complemento}}</td>
                    <td>{{$cli->cep}}</td>
                    <td>{{$cli->cidade}}</td>
                    <td>{{$cli->estado}}</td>
                    <td>{$cli->RG}}</td>
                    <td>{{$cli->cpf}}</td>
                    <td>{{$cli->email}}</td>
                    <td>{{$cli->fone}}</td>
                    <td>{{$cli->celular}}
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
        </div>

        <footer>
            <p>Desenvolvido por: Rennan Moura<br>
                <a href="mailto:rsmoura252@gmail.com">rsmoura252@gmail.com</a>
            </p>
        </footer>

    </body>
</html>