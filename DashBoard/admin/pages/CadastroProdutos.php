<!DOCTYPE html>
<html lang="en">
<?php
        $path = "/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>


<body>

<?php
        $path = "/menu.php";
        include_once(dirname(__DIR__) . $path);
    ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro Produtos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastro Produtos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="Envia_Produto.php" method="get">
                                        <div class="form-group">
                                            <label>Nome do Produto</label>
                                             <input type="text" class="form-control" placeholder="Inserir o nome do produto" id="nomeproduto" name="nomeproduto" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo do Produto</label>
                                             <input type="text" class="form-control" placeholder="Inserir o código do produto" id="codigoproduto" name="codigoproduto" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Marca</label>
                                             <input type="text" class="form-control" placeholder="Inserir marca" id="marca" name="marca" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fornecedor</label>
                                             <input type="text" class="form-control" placeholder="Inserir fornecedor" id="fornecedor" name="fornecedor" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Unidade</label>
                                             <input type="text" class="form-control" placeholder="Inserir unidade" id="unidade" name="unidade" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Peso</label>
                                             <input type="text" class="form-control" placeholder="Inserir peso" id="peso" name="peso" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Estoque Minimo</label>
                                             <input type="text" class="form-control" placeholder="Inserir estoque mininmo" id="estoqueminimo" name="estoqueminimo" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Estoque Maximo</label>
                                             <input type="text" class="form-control" placeholder="Inserir estoque maximo" id="estoquemaximo" name="estoquemaximo" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Código GTIN/EAN</label>
                                             <input type="text" class="form-control" placeholder="Inserir codigo GTIN/EAN" id="codigogtin" name="codigogtin" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valor de venda</label>
                                             <input type="text" class="form-control" placeholder="Inserir valor de venda" id="valorvenda" name="valorvenda" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valor de custo</label>
                                             <input type="text" class="form-control" placeholder="Inserir valor de custo" id="valorcusto" name="valorcusto" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Origem do produto</label>
                                             <input type="text" class="form-control" placeholder="Inserir origem do produto" id="origemproduto" name="origemproduto" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Situação</label>
                                             <input type="text" class="form-control" placeholder="Inserir situação" id="situação" name="situação" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-control" id="estado" name="estado">
                                                <option>Selecione</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espirito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                                <?php
        $path = "/script.php";
        include_once(dirname(__DIR__) . $path);
    ?>

  

</body>

</html>
