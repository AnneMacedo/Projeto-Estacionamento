<?php
	include "header.php";

	if(isset( $_POST["send"] ) )  {
		$placa = anti_sql($_POST["placa"]);
		$data_hora = anti_sql($_POST["data_hora"]);
		//$funcionario = $_POST["funcionario"];     
		$funcionario = 0;
        $cliente = 0;
        $vaga = 0;        

		if( !empty($placa) && !empty($data_hora)){

			$query = "INSERT INTO reserva (idReserva, placa, data_hora, idVaga, idCliente, idFuncionario)
			VALUES (null, '$placa', '$data_hora','$idVaga', '$idCliente', '$idFuncionario')";
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
                                        <span class="caption-subject bold uppercase"> Cadastrar Reserva</span>
                                    </div>
                                </div>
                                <!-- FORMULARIO BODY -->
                                <div class="portlet-body form">
                                    <form method="post" role="form">
                                        <div class="form-body">                                                   
                                            <div class="form-group">
                                                <label>Placa</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="placa" type="text" class="form-control" placeholder="Ex.: abc0000"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Data/Hora</label>
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o font-green"></i>
                                                    <input name="data_hora" type="text" class="form-control" placeholder="Ex.: dd/mm/aaa hh:mm"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Funcionário</label>
                                                <select class="form-control" name="funcionario" disabled="">
                                                    <option value="nulo">Escolha uma opção</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Cliente</label>
                                                <select class="form-control" name="cliente" disabled="">
                                                    <option value="nulo">Escolha uma opção</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Vaga</label>
                                                <select class="form-control" name="vaga" disabled="">
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