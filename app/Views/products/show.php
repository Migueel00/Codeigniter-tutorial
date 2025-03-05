<?php 
  echo $this->extend('templates/layout');
?>

<?php 
  echo $this->section('content');
?>
<h2>
  Detalles del producto <?php echo $id ?> 
</h2>
<?php 
  echo $this->endSection();
?>