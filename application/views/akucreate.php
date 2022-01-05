<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('asset/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT CHARACTER GENSHIN</title>
</head>
<body>
<div class="navbar-fixed ">
        <nav class="#00c853 green accent-4">
            <div class="nav-wrapper container ">
                <a href="#" class="brand-logo">LAPTOP</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="topnav right hide-on-med-and-down">
                   
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="container">
        
    <?php echo form_open_multipart('Laptop/create');?>
<table>
    <tr><td>id</td><td><?php echo form_input('id');?></td></tr>
    <tr><td>merek</td><td><?php echo form_input('merek');?></td></tr>   
    <tr><td>jenis</td><td><?php echo form_input('jenis');?></td></tr>   
    <tr><td>tahun</td><td><?php echo form_input('tahun');?></td></tr>   
         
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