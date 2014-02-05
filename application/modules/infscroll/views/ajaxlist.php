<?php foreach ($pos as $post): ?>
<tr>
  <td><?php echo $post['Pavadinimas']; ?></td>
  <td><?php echo $post['Postas']; ?></td>
  <td><?php echo $post['Data']; ?></td>
  <td><?php echo $post['id']; ?></td>
</tr>
<?php endforeach; ?>