<div class="container-fluid px-4">
  <h1 class="mt-4">Listagem de Usuários</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item">
      <a href="layout.php?page=add-user">Adicionar Usuário</a>
    </li>
    <li class="breadcrumb-item active">Listagem de Usuários</li>
  </ol>

  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Listagem de Usuários
    </div>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $dt) : ?>
            <?php $token = base64_encode($dt); ?>
            <?php $dt = explode(' - ', $dt); ?>
            <tr>
              <td class="col-4"><?= $dt[0]; ?></td>
              <td>
                <form action="modules/users/edit.php?id=<?= $key; ?>&token=<?= $token; ?>" method="POST">
                
                  <button type="submit">Editar</button>
                </form>

                <form 
                  action="modules/users/users.php?id=<?= $key; ?>" 
                  method="POST"
                >
                  <input id="id" name="id" value="<?= $key; ?>" type="hidden" />
                  <input id="name" name="action" value="delete" type="hidden" />
                  <button type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>