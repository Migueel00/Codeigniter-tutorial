<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Add product</h1>
  <?php echo form_open('products/save'); ?>

  <?php 
    $attributes = [
      'type' => 'text',
      'id' => 'code',
      'name' => 'code',
      'class' => 'form-control',
      'required' => true
    ];
  ?>

  <p>
    <?php echo form_label('Code', 'code', ['class' => 'form-label'])?>
    <?php echo form_input($attributes) ?>
  </p>

  <p>
    <?php echo form_label('Name', 'name')?>
    <?php echo form_input('name', '', ['id' => 'name', 'class' => 'form-control']) ?>
  </p>

  <p>
    <?php echo form_label('Price', 'price')?>
    <?php echo form_input('price', '0.00', ['id' => 'price', 'min' => 1,'class' => 'form-control'], 'number') ?>
  </p>

  <p>
    <?php echo form_label('Stock', 'stock')?>
    <?php echo form_input('stock', '0', ['id' => 'stock', 'min' => 0,'class' => 'form-control'], 'number') ?>
  </p>

  <p>
    <?php echo form_submit('submit', 'save', ['class' => 'btn btn-primary']); ?> 
  </p>

  <?php echo form_close(); ?>
</body>
</html>