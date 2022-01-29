<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Judul Buku</th>
      <th>Pengarang</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 0; $i < count($results); ++$i) { ?>
      <tr>
        <td><?php echo ($page + $i + 1); ?></td>
        <td><?php echo $results[$i]->judul_buku; ?></td>
        <td><?php echo $results[$i]->pengarang; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<div id="ajax_links" class="text-center">
  <?php echo $links; ?>
</div>