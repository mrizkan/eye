<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Eye with us Opticals</title>



    <link rel="stylesheet" href="<?= base_url() ?>css/flog.css">


</head>

<body>
<div class="wrapper">
    <div class="container">
        <h1>Eye with us Opticals</h1>

        <?= form_open('Customer/login'); ?>
            <input type="text" name="username" autocomplete="off" placeholder="Username">
            <input type="password" name="password" autocomplete="off" placeholder="Password">
            <button type="submit">Login</button>
        <?php echo form_close(); ?>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



</body>
</html>
