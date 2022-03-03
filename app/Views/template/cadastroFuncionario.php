        <a href="<?= base_url("departamento"); ?>"> Gerenciar Departamento</a>
        <strong><?php echo $msg; ?></strong>
        <form action="<?= base_url("index.php/Urgtec"); ?>" method="post">
        <label for="exampleFormControlInput1"  class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome Completo do Funcionário">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

         <div class="form-check">
          <input class="form-check-input" value="masculino"  type="radio" name="sexo" id="sexo">
          <label class="form-check-label" for="sexo">
            Masculino
          </label> 

        </div>
           <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexo">
          <label class="form-check-label" value="Ferminino"  for="sexo">
            Ferminino
          </label>     
        </div>

        <label for="DataDeNascimento" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" id="DataDeNascimento" placeholder="Informe a data do seu Nascimento">

         <div class="form-group">
            <label for="SetorFuncionario">Selecione o departamento do Funcionário</label>
           <select class="form-select form-select-sm mb-3" name="departamento" aria-label="Default select example">

            <?php foreach ($departamento as $dp): ?>    
              <option value="<?php echo $dp->id_departamento; ?>"><?php echo $dp->nome_departamento; ?></option>
              <?php endforeach; ?>
            </select>
        </div>

          <div class="form-check">
          <input class="form-check-input" value="1"  type="radio" name="status" id="status">
          <label class="form-check-label" for="status">
            Ativo
          </label> 
        </div>

        <div class="form-check">
          <input class="form-check-input" value="0" type="radio" name="status" id="status">
          <label class="form-check-label"  for="status">
            Inativo
          </label>     
        </div>
          <div class="col-12">
            <button class="btn btn-info" name="cadastrar" type="submit">Cadastrar Funcionário</button>
          </div>
          </form>
