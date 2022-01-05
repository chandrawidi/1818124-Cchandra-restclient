<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('asset/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT Laptop</title>
</head>
<body>
<?php echo form_open('Laptop/edit');?>
<?php echo form_hidden('id',$dataLaptop->id);?>

<table>
    <tr><td>id</td><td><?php echo form_input('id',$dataLaptop->id,"");?></td></tr>
    <tr><td>merek</td><td><?php echo form_input('merek',$dataLaptop->merek);?></td></tr>
    <tr><td>jenis</td><td><?php echo form_input('jenis',$dataLaptop->jenis);?></td></tr>
    <tr><td>tahun</td><td><?php echo form_input('tahun',$dataLaptop->tahun);?></td></tr>

    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Laptop','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
    <script type="text/javascript" src="<?= base_url('asset/js/materialize.min.js') ?>"></script>
</body>
</html>