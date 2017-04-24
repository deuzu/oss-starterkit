<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Trollo</div>
  <div class="panel-body">
    <p>Liste des taches</p>
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
      <?php for ($i=0; $i < count($cards); $i++)
      { ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $cards["title"][$i]; ?></td>
        <td><?php echo $cards["description"][$i]; ?></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>
