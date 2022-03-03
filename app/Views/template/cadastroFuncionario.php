        
        <a href="<?= base_url("departamento"); ?>"> Gerenciar Departamento</a>
        <div class="col-12">
          <h4 class="text-<?php echo isset(session()->alert) ? session()->alert : null;  ?> text-center"><strong><?php echo isset(session()->msg) ? session()->msg : null ?></strong></h4>
        </div>
        <?php if(isset(session()->erros)): ?>
          <ul class="text-danger">
            <?php foreach (session()->erros as $erro): ?>
              <li> <?php echo $erro; ?> </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
        <form action="<?= base_url("funcionarios"); ?>" method="post">
        <label for="exampleFormControlInput1"  class="form-label">Nome</label>
        <input type="text" name="nome" value="<?= set_value('nome', null)?>" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome Completo do Funcionário">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" value="<?= set_value('email', null)?>" class="form-control" id="email" placeholder="name@example.com">
        </div>

         <div class="form-check">
          <input class="form-check-input" value="masculino"  type="radio" name="sexo" id="sexo">
          <label class="form-check-label" for="sexo">
            Masculino
          </label> 

        </div>
          <div class="form-check">
          <input class="form-check-input" value="ferminino"  type="radio" name="sexo" id="sexo">
          <label class="form-check-label"  for="sexo">
            Ferminino
          </label>     
        </div>

        <label for="DataDeNascimento"  class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="<?= set_value('data_nascimento', null)?>" class="form-control" id="DataDeNascimento" placeholder="Informe a data do seu Nascimento">

         <div class="form-group">
            <label for="SetorFuncionario">Selecione o departamento do Funcionário</label>
           <select class="form-select form-select-sm mb-3" value="<?= set_value('departamento', null)?>" name="departamento" aria-label="Default select example">

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
