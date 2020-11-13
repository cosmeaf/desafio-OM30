        	<!-- Begin Page Content -->
        	<div class="container-fluid">
        		<h1 class="h3 mb-0 text-gray-800 float-left">CADASTRO DE PACIENTES</h1>
        		<!-- Page Heading -->
        		<div class="d-sm-flex align-items-center justify-content-end mb-3">
        			<a href="<?= base_url();?>dashboard/patients" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-chevron-circle-left fa-sm text-white-50"></i> VOLTAR</a>
        			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> REPORT</a>
        		</div>
        	</div>

        	<div class="container-fluid">
        		<div class="card p-3 mb-5">
        			<div class="row">
        				<div class="col p-3">
        					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        						<li class="nav-item">
        							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
        								PESSOAL
        							</a>
        						</li>
        						<li class="nav-item">
        							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">PROFISSIONAL
        							</a>
        						</li>
        						<li class="nav-item">
        							<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">HOSPITAL
        							</a>
        						</li>
        					</ul>
        					<hr>
        					<div class="tab-content" id="pills-tabContent">
        						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        							<form>
        								<!-- PESSOAL ################################################################################ -->
        								<div class="form-row">
        									<div class="form-group col-md-4">
        										<label for="nome">NOME COMPLETO</label>
        										<input type="text" class="form-control form-control-sm" id="nome" name="nome">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="nomesocial">NOME SOCIAL</label>
        										<input type="text" class="form-control form-control-sm" id="nomesocial" name="nomesocial">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="nascimento">NASCIMENTO</label>
        										<input type="date" class="form-control form-control-sm" id="nascimento" name="nascimento">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="genero">GENERO</label>
        										<select id="genero" class="form-control form-control-sm" name="genero">
        											<option selected>...</option>
        											<option value="feminino">Feminino</option>
        											<option value="masculino">Masculino</option>
        											<option value="outros">Outros</option>
        										</select>
        									</div>
        									<div class="form-group col-md-2">
        										<label for="racacor">RAÇA/COR</label>
        										<select id="racacor" class="form-control form-control-sm">
        											<option selected>...</option>
        											<option value="negro">Negro</option>
        											<option value="branco">Branco</option>
        											<option value="pardo">Pardo</option>
        											<option value="amarelo">Amarelo</option>
        											<option value="indigena">Indigêna</option>
        											<option value="outros">Outros</option>
        										</select>
        									</div>
        								</div>
        								<!-- NOME PAI E MAE ######################################################################### -->
        								<div class="form-row">
        									<div class="form-group col-4">
        										<label for="nomemae">NOME DA MÃE</label>
        										<input type="text" class="form-control" id="nomemae" name="nomemae">
        										<div class="form-check form-check-inline">
        											<input class="form-check-input" type="checkbox" id="maedesconhecida">
        											<label class="form-check-label mt-1" for="maedesconhecida">
        												Desconhecido
        											</label>
        										</div>

        									</div>
        									<div class="form-group col-4">
        										<label for="nomepai">NOME DO PAI</label>
        										<input type="text" class="form-control form-control-sm" id="nomepai" name="nomepai">
        										<div class="form-check form-check-inline">
        											<input class="form-check-input" type="checkbox" id="paidesconhecido">
        											<label class="form-check-label mt-1" for="paidesconhecido">
        												Desconhecido
        											</label>
        										</div>
        									</div>
        									<div class="form-group col-md-2">
        										<label for="tiposangue">TIPO SANGUE</label>
        										<select id="tiposangue" class="form-control form-control-sm" name="tiposangue">
        											<option selected>...</option>
        											<option value="A POSITIVO"> A 	POSITIVO</option>
        											<option value="A NEGATIVO"> A 	NEGATIVO</option>
        											<option value="B POSITIVO"> B 	POSITIVO</option>
        											<option value="B NEGATIVO"> B 	NEGATIVO</option>
        											<option value="AB POSITIVO">AB 	POSITIVO</option>
        											<option value="AB NEGATIVO">AB 	NEGATIVO</option>
        											<option value="O POSITIVO"> O 	POSITIVO</option>
        											<option value="O NEGATIVO"> O 	NEGATIVO</option>
        										</select>
        									</div>
        								</div>
        								<!-- NACIONALIDADE E SAUDE ################################################################### -->
        								<div class="form-row">
        									<div class="form-group col-md-2">
        										<label for="cpf">CPF </label>
        										<input type="text" class="form-control form-control-sm" id="cpf" name="cpf">
        									</div>
        									<div class="form-check form-check-inline mr-5">
        										<input class="form-check-input" type="radio" name="nacionalidade" id="brasileiro" value="brasileiro">
        										<label class="form-check-label" for="brasileiro"> BRASILEIRO</label>
        									</div>
        									<div class="form-check form-check-inline mr-5">
        										<input class="form-check-input" type="radio" name="nacionalidade" id="naturalizado" value="naturalizado">
        										<label class="form-check-label" for="naturalizado"> NATURALIZADO</label>
        									</div>
        									<div class="form-check form-check-inline mr-5">
        										<input class="form-check-input" type="radio" name="nacionalidade" id="estrangeiro" value="estrangeiro">
        										<label class="form-check-label" for="estrangeiro"> ESTRANGEIRO</label>
        									</div>
        									<div class="form-group col-md-2">
        										<label for="cnes">CNES </label>
        										<input type="text" class="form-control form-control-sm" id="cnes" name="cnes">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="pis">NIS/PIS/PASEP</label>
        										<input type="text" class="form-control form-control-sm" id="pis" name="pis">
        									</div>
        								</div>
        								<!-- IDENTIDADE  ############################################################################# -->
        								<div class="form-row">
        									<div class="form-group col-md-2">
        										<label for="identidade">IDENTIDADE</label>
        										<input type="text" class="form-control form-control-sm" id="identidade" name="identidade">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="identidadeorg">ORGÃO EXPEDITOR</label>
        										<input type="text" class="form-control form-control-sm" id="identidadeorg" name="identidadeorg">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="identidadeuf">UF</label>
        										<select id="identidadeuf" class="form-control form-control-sm" name="identidadeuf">
        											<option selected>...</option>
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
        									<div class="form-group col-md-2">
        										<label for="identidadedate">DATA EMISSÃO</label>
        										<input type="date" class="form-control form-control-sm" id="identidadedate" name="identidadedate">
        									</div>
        								</div>
        								<!--CTPS  ################################################################################## -->
        								<div class="form-row">
        									<div class="form-group col-md-2">
        										<label for="carttrab">CART. TRABALHO</label>
        										<input type="text" class="form-control form-control-sm" id="carttrab" name="carttrab">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="carttraborg">ORGÃO EXPEDITOR</label>
        										<input type="text" class="form-control form-control-sm" id="carttraborg" name="carttraborg">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="carttrabuf">UF</label>
        										<select id="carttrabuf" class="form-control form-control-sm" name="carttrabuf">
        											<option selected>...</option>
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
        									<div class="form-group col-md-2">
        										<label for="identidadedate">DATA EMISSÃO</label>
        										<input type="date" class="form-control form-control-sm" id="identidadedate" name="identidadedate">
        									</div>
        								</div>
        								<!--CONTATO ################################################################################ -->
        								<div class="form-row">
        									<div class="form-group col-md-4">
        										<label for="email">E-MAIL</label>
        										<input type="text" class="form-control form-control-sm" id="email" name="email">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="celular">CELULAR</label>
        										<input type="text" class="form-control form-control-sm" id="celular" name="celular">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="telefone">TELEFONE</label>
        										<input type="text" class="form-control form-control-sm" id="telefone" name="telefone">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="recado">RECADO</label>
        										<input type="text" class="form-control form-control-sm" id="recado" name="recado">
        									</div>
        								</div>
        								<!-- ENDERECO ############################################################################## -->
        								<div class="form-row">
        									<div class="form-group col-md-2">
        										<label for="cep">CEP</label>
        										<input type="text" class="form-control form-control-sm" id="cep" name="cep">
        									</div>
        									<div class="form-group col-md-3">
        										<label for="logradouro">LOGRADOURO</label>
        										<input type="text" class="form-control form-control-sm" id="logradouro" name="logradouro">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="bairro">BAIRRO</label>
        										<input type="text" class="form-control form-control-sm" id="bairro" name="bairro">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="localidade">LOCALIDADE</label>
        										<input type="text" class="form-control form-control-sm" id="localidade" name="localidade">
        									</div>
        									<div class="form-group col-md-1">
        										<label for="uf">UF</label>
        										<input type="text" class="form-control form-control-sm" id="uf" name="uf">
        									</div>
        									<div class="form-group col-md-2">
        										<label for="estado">ESTADO</label>
        										<input type="text" class="form-control form-control-sm" id="estado" name="estado">
        									</div>
        								</div>
        								<div class="form-row">
        									<div class="form-group col-md-2">
        										<label for="numero">NUMERO</label>
        										<input type="text" class="form-control form-control-sm" id="numero" name="numero">
        									</div>
        									<div class="form-group col-md-4">
        										<label for="complemento">COMPLEMENTO</label>
        										<input type="text" class="form-control form-control-sm" id="complemento" name="complemento">
        									</div>
        									<div class="form-group col-md-6">
        										<label for="referencia">REFERENCIA</label>
        										<input type="text" class="form-control form-control-sm" id="referencia" name="referencia">
        									</div>
        								</div>
        								<button type="submit" class="btn btn-primary"><i class="far fa-save"></i> CADASTRAR</button>
        							</form>
        						</div>
        						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        							...
        						</div>
        						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        							...
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>