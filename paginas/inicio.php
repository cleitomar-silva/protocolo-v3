<main class="p-4 flex-grow-1">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="h4 fw-bold">Bem-vindo ao Sistema de Gestão</h2>
            <p class="text-secondary">Esta é a página inicial do sistema. Selecione uma opção no menu lateral.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="card p-4 bg-white bg-dark">
                <div class="card-header ">Buscar</div>
                <div class="card-body">

                    <form action="principal.php" method="get" class="mb-5">

                        <div class="input-group">
                            <input type="text" name="pesqProcesso" placeholder="Nº do processo, assunto, descrição ou nome da pessoa / interessado" class="form-control" required="true">
                            <!-- <input type="submit" class="btn btn-info btn-flat btn-sm" value="Pesquisar"> -->
                            <button type="submit" class="btn btn-info btn-modo-dark text-light">Pesquisar</button>
                        </div>
                        <input name="cod" type="hidden" id="cod" value="10">

                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card bg-white bg-dark p-4 rounded shadow-sm mb-4">
                <div class="card-header">
                    Processos pendentes
                </div>
                <div class="card-body">
                    <table class="table table-hover text-black txt-white">
                        <thead>
                        <tr>
                            <th scope="col">Nº Processo</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Pessoa</th>
                            <th scope="col">Localização</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>


                    </table>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link text-black " href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- manter exemplos de atividades recentes, simplificado -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-white bg-dark p-4 rounded shadow-sm mb-4">
                <div class="card-header">
                    Processos em andamento
                </div>
                <div class="card-body">
                    <table class="table table-hover text-black txt-white">
                        <thead>
                        <tr>
                            <th scope="col">Nº Processo</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Pessoa</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Localização</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                        </tr>
                        </tbody>


                    </table>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link text-black " href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-black " href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

        </div>
    </div>
</main>