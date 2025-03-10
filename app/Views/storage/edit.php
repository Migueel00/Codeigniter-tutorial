<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>

<h2 class="mb-4"><?php echo $title ?></h2>

<?php echo validation_list_errors(); ?>

<form action="<?php echo base_url('storage/'.$id)?>" method="POST" autocomplete="off" class="container">
  <input type="hidden" name="_method" value="DELETE"/>

  <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" name="name" 
        value="<?php echo set_value('name')?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="description" name="description" 
        value="<?php echo set_value('description')?>">
    </div>
  </div>

  <div class="mb-3 row">
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary">Save</button>
  </div>

</form>

<?php echo $this->endSection('content'); ?>