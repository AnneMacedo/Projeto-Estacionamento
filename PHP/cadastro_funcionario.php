<?php
	include "header.php";

	if(isset( $_POST["send"] ) )  {
		$nome = anti_sql($_POST["nome_completo"]);
		$cpf = anti_sql($_POST["cpf"]);
        $rg = anti_sql($_POST["rg"]);
		$estado = anti_sql($_POST["estado"]);
		$cidade = anti_sql($_POST["cidade"]);
        $funcao = anti_sql($_POST["funcao"]);
		//$funcionario = $_POST["funcionario"];
		$funcionario = 0;

		if( !empty($nome) && !empty($cpf) && !empty($rg) && !empty($estado) && !empty($cidade)  && !empty($funcao)){

			$query = "INSERT INTO funcionario (idFuncionario, nome, cpf, cidade, estado, rg, funcao)
			VALUES (null, '$nome', '$cpf', '$rg', '$cidade', '$estado', '$funcao')";
			mysql_query($query);
        }
    }
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<div class="container-fluid">
    <div class="page-content">
        <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
        <div class="page-content-container">
            <div class="page-content-row">
                <div class="page-content-col">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div> 
                            <!-- BEGIN SAMPLE FORM PORTLET / FORMULARIO-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Cadastrar Funcionário</span>
                                    </div>
                                </div>
                                <!-- FORMULARIO BODY -->
                                <div class="portlet-body form">
                                    <form method="post" role="form">
                                        <div class="form-body">                                                   
                                            <div class="form-group">
                                                <label>Nome Completo</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="nome_completo" type="text" class="form-control" placeholder="Ex.: Fulano Beltrano da Silva"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="cpf" type="text" class="form-control" placeholder="Ex.: 000.000.000-00"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>RG</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="rg" type="text" class="form-control" placeholder="Ex.: 000.000.00-00"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <select class="form-control" name="estado">
                                                	<option value="nulo">Escolha uma opção</option>
                                                    <option value="bahia">Bahia</option>
                                                    <option value="sao paulo">São Paulo</option>
                                                    <option value="pernambuco">Pernambuco</option>
                                                    <option value="sergipe">Sergipe</option>
                                                    <option value="rio de janeiro">Rio de Janeiro</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="cidade" type="text" class="form-control" placeholder="Ex.: Salvador"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Função</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="funcao" type="text" class="form-control" placeholder="Ex.: manobrista"> </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" name="send" id="send" class="btn blue">Enviar</button>
                                            <button type="reset" class="btn default">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- FIM FORMULARIO BODY -->
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR CONTENT LAYOUT -->
    </div>
</div>

<?php include "footer.php" ?>
                