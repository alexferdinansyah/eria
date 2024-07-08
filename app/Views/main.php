<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/responsive.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/font-awesome.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<div class="navbar">
        <div class="nav-logo">
            <img src="<?= base_url('assets/images/logo-eria.png') ?>" alt="">
        </div>
        <div class="nav-menus">
            <ul>
                <li><a href="#">PROGRAMMES</a></li>
                <li><a href="#">PUBLICATIONS</a></li>
                <li><a href="#">UPDATES</a></li>
                <li><a href="#">EVENTS</a></li>
            </ul>
        </div>
    </div>


    <?= $this->renderSection('content') ?>
</body>
</html>