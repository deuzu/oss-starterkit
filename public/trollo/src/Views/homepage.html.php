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
    </tr>
  </thead>
  <tbody>
      <?php foreach($cards as $card)
      { ?>
      <tr>
        <th scope="row"><?php echo $card['id']; ?></th>
        <td><?php echo $card['title']; ?></td>
        <td><?php echo $card['description']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>
