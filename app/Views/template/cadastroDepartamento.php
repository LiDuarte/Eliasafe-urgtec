      <h1>Oiii</h1>
    <a href="<?= base_url("funcionarios"); ?>"> Gerenciar Funcionários</a>
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
        <form action="<?= base_url("index.php/Urgtec/departamento"); ?>" method="post">
        <div class="mb-3">
          <label for="nome_departamento" class="form-label">Informe o nome do Departamento</label>
          <input type="text" class="form-control" name="nome_departamento" id="nome_departamento" placeholder="Digite o nome do Departamento">
        </div>

          <div class="col-12">
            <button class="btn btn-info" name="cadastrar" type="submit">Cadastrar Departamento</button>
          </div>
          </form>


        <div class="col-12">
          <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome Departamento</th>
              <th scope="col">Editar/Excluir</th>
            </tr>
          </thead>
          <?php foreach($departamento as $dp): ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $dp->id_departamento; ?></th>
              <td><?php echo $dp->nome_departamento; ?></td>
              <td><a href="">Excluir</a> / <a href="">Editar</a></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
        </table>
        </div>


        