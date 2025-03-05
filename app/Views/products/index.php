<?php $this->extend('templates/layout'); ?>

<?php $this->section('content'); ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Stock</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
  <script>
    alert('Hello JS');
  </script>
<?php $this->endSection(); ?>