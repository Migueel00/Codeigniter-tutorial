<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>

<h2 class="mb-4"> <?php $title ?> Product </h2>

<?php echo validation_list_errors(); ?>

<form action="<?php echo base_url('products/edit/'.$product->id) ?>" method="post" autocomplete="off" class="container">

  <input type="hidden" name="id" value="<?php echo $product->id ?> ">
  <div class="mb-3 row">
    <label for="code" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="code" name="code"
        value="<?php echo set_value('code', $product->code) ?>">
    </div>
    <?php echo validation_show_error('code') ?>
  </div>

  <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" name="name"
        value="<?php echo $product->name ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="price" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="price" name="price" min="1" value="0.00"
        value="<?php echo $product->price; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="stock" name="stock" min="0"
        value="<?php echo $product->stock ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="storage" class="col-sm-2 col-form-label">Storage</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="storage" id="storage"
        value="<?php echo $product->id_storage ?> ">
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>

</form>

<?php echo $this->endSection('content'); ?>