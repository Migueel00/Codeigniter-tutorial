<?php 
  echo $this->extend('templates/layout');
?>

<?php 
  echo $this->section('content');
?>
<h2>
  Detalles del producto <?php echo $id ?>
  <?php echo $product->name; ?>
</h2>
<?php 
  echo $this->endSection();
?>