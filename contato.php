    <div class="container marketing">
		<h1>Contato</h1>
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-6">
          <h2 class="featurette-heading">Contato por E-mail.</h2>
			<form class="form-horizontal" method="POST" action="processa/proc_cad_contato.php" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nome Completo*</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail3" name="nome" placeholder="Preencher nome completo" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email*</label>
				<div class="col-sm-10">
				  <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Telefone*</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail3" name="telefone" placeholder="Telefone" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Assunto*</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail3" name="assunto" placeholder="Assunto da mensagem" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Mensagem*</label>
				<div class="col-sm-10">
				  <textarea class="form-control" rows="3" name="mensagem"></textarea>
				</div>
			  </div>
			  
			  
			  
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <input type="submit" class="btn btn-success" value="Enviar">
				</div>
			  </div>
			</form>
        </div>
        <div class="col-md-6">
          <h2 class="featurette-heading">Contato por Telefone. </h2>
          <p class="lead">Este é um canal de comunicação direto conosco.Seja por telefone, e-mail ou pessoalmente, estamos prontos para atendê-los da melhor forma. Envie-nos a sua mensagem através do formulário ao lado, estamos aguardando o seu contato.</p>
					<p class="lead"> Telefone para Contato: (44) 1228-9999 </p>
					<p class="lead"> WathsApp:  (44) 9 9999-9999 </p>
				</div>
      </div>

      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->


      <footer>
        <p>&copy; Loja 2018</p>
      </footer>
    </div> <!-- /container -->


