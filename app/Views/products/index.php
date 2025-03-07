<?php $this->extend('templates/layout'); ?>

<?php $this->section('content'); ?>
<table class="table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Stock</th>
      <th>Storage</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product) : ?>
      <tr>
        <td> <?php echo $product->code ?> </td>
        <td> <?php echo $product->name ?> </td>
        <td> <?php echo $product->stock ?> </td>
        <td> <?php echo $product->storage ?> </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
  <script>
    alert('Hello JS');
  </script>
<?php $this->endSection(); ?>