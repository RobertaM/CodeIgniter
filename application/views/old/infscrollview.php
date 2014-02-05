<div id="customer-wrapper">
  <div class="span8">
    <table class="table table-stripped">
      <thead>
      <tr>
        <th>Company Name</th>
        <th>Customer Name</th>
        <th>Customer Title</th>
        <th>City</th>
      </tr>
      </thead>

      <tbody>
      <?php foreach ($pos as $post): ?>
      <tr>
        <td><?php echo $post['Pavadinimas']; ?></td>
        <td><?php echo $post['Postas']; ?></td>
        <td><?php echo $post['Data']; ?></td>
        <td><?php echo $post['id']; ?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>