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
                    <h1 class="page-header">Cadastro de Funcionários</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastro Funcionários
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="Envia_Funcionario.php" method="get">
                                        <div class="form-group">
                                            <label>Nome Completo</label>
                                            <input type="text" class="form-control" placeholder="Insira o seu nome" id="nomecompleto" name="nomecompleto" >
                                        </div>
                                        <div class="form-group">
                                             <label>CPF</label> 
                                             <input class="form-control" placeholder="Insira o seu CPF" type="text" name="cpf" maxlength="11" onblur="return verificarCPF(this.value)" id="cpf">
                                        </div>
                                            
                                         <div class="form-group">
                                            <label>RG</label>
                                            <input type="text" class="form-control" placeholder="Insira o seu RG" id="rg" name="rg" >
                                        </div>
                                        <div class="form-group">
                                            
                                        <script type='text/javascript' >
                                            
                                            function limpa_formulário_cep() {
                                                    //Limpa valores do formulário de cep.
                                                    document.getElementById('endereco').value=('');
                                                    document.getElementById('bairro').value=('');
                                                    document.getElementById('cidade').value=('');
                                                    document.getElementById('estado').value=('');
                                                   
                                            }

                                            function meu_callback(conteudo) {
                                                if (!('erro' in conteudo)) {
                                                    //Atualiza os campos com os valores.
                                                    document.getElementById('endereco').value=(conteudo.logradouro);
                                                    document.getElementById('bairro').value=(conteudo.bairro);
                                                    document.getElementById('cidade').value=(conteudo.localidade);
                                                    document.getElementById('estado').value=(conteudo.uf);
                                                    
                                                } //end if.
                                                else {
                                                    //CEP não Encontrado.
                                                    limpa_formulário_cep();
                                                    alert('CEP não encontrado.');
                                                }
                                            }
                                                
                                            function pesquisacep(valor) {

                                                //Nova variável 'cep' somente com dígitos.
                                                var cep = valor.replace(/\D/g, '');

                                                //Verifica se campo cep possui valor informado.
                                                if (cep != '') {

                                                    //Expressão regular para validar o CEP.
                                                    var validacep = /^[0-9]{8}$/;

                                                    //Valida o formato do CEP.
                                                    if(validacep.test(cep)) {

                                                        //Preenche os campos com '...' enquanto consulta webservice.
                                                        document.getElementById('endereco').value='...';
                                                        document.getElementById('bairro').value='...';
                                                        document.getElementById('cidade').value='...';
                                                        document.getElementById('estado').value='...';
                                                        

                                                        //Cria um elemento javascript.
                                                        var script = document.createElement('script');

                                                        //Sincroniza com o callback.
                                                        script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                                                        //Insere script no documento e carrega o conteúdo.
                                                        document.body.appendChild(script);

                                                    } //end if.
                                                    else {
                                                        //cep é inválido.
                                                        limpa_formulário_cep();
                                                        alert('Formato de CEP inválido.');
                                                    }
                                                } //end if.
                                                else {
                                                    //cep sem valor, limpa formulário.
                                                    limpa_formulário_cep();
                                                }
                                            };

                                            </script>

                                            <label>CEP</label>
                                            <input class="form-control" placeholder="Insira o seu CEP " onblur="pesquisacep(this.value)" id="cep" name="cep" type="">
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Nascimento</label>
                                            <input type="date" class="form-control" placeholder="Insira a sua data de nascimento" id="data_nascimento" name="data_nascimento" >
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone Principal</label>
                                            <input type="text" class="form-control" placeholder="Insira o seu telefone" id="telefone" name="telefone" >
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="nome@email.com" id="email" name="email" >
                                        </div> 
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" placeholder="Insira sua senha" id="password" name="senha" >
                                        </div> 
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" placeholder="Insira o seu endereço" id="endereco" name="endereco" >
                                        </div>
                                        <div class="form-group">
                                            <label>Bairro </label>
                                            <input type="text" class="form-control" placeholder="Insira o seu bairro" id="bairro" name="bairro" >
                                        </div>
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control" placeholder="Insira a sua cidade" id="cidade" name="cidade" >
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input type="text" class="form-control" placeholder="Insira o seu estado" id="estado" name="estado" >
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="isAdmin" name="isAdmin" value="ADMIN">
                                            <label for="isAdmin">Admin?</label>
                                        </div>
                                             <div class="form-group">
                                             <input type="radio" id="isAdmin" name="isAdmin" value="FUNC">
                                             <label for="isAdmin">Func?</label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                                
                                <?php
        $path = "/script.php";
        include_once(dirname(__DIR__) . $path);
    ?>
   
    <script>
        $(document).ready(function(){
            $("#telefone").mask("(00)00000-0000");
        });
        
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00");
        });
        
        $(document).ready(function(){
            $("#cep").mask("00000-000");
        });
    </script>
  
</body>

</html>
