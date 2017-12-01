<?php
	include "header.php";

	if(isset( $_POST["send"] ) )  {
		$situacao = anti_sql($_POST["situacao"]);
		$andar = anti_sql($_POST["andar"]);
        $numero = anti_sql($_POST["numero"]);
		//$funcionario = $_POST["funcionario"];
		$funcionario = 0;

		if( !empty($situacao) && !empty($andar) && !empty($numero)){

			$query = "INSERT INTO vaga (idVaga, situacao, andar, numero, idFuncionario)
			VALUES (null, '$situacao', '$andar', '$numero','$idFuncionario')";
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
                                        <span class="caption-subject bold uppercase"> Cadastrar Vaga</span>
                                    </div>
                                </div>
                                <!-- FORMULARIO BODY -->
                                <div class="portlet-body form">
                                    <form method="post" role="form">
                                        <div class="form-body">                                                   
                                            <div class="form-group">
                                                <label>Situação</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="situacao" type="text" class="form-control" placeholder="Ex.: disponível, ocupada"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Andar</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="vaga" type="text" class="form-control" placeholder="Ex.: 1º, 2º"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Numero</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="numero" type="text" class="form-control" placeholder="Ex.: 000"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Funcionário</label>
                                                <select class="form-control" name="funcionario" disabled="">
                                                    <option value="nulo">Escolha uma opção</option>
                                                </select>
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
                