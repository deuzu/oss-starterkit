<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Trollo</div>
  <div class="panel-body">
    <p>Liste des cartes</p>
  </div>

  <!-- Table -->

  <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($cards as $card): ?>
      <tr>
        <th scope="row"><? echo $card['id']; ?></th>
        <td><? echo $card['title']; ?></td>
        <td><? echo $card['description']; ?></td>
        <td></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>

  <a class="btn btn-danger" href="/?route=cardCreationForm" role="button">Create</a>
</div>
