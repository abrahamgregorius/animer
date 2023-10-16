<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animer</title>
    <?php wp_head() ?>
</head>
<body>
    <div id="navbar" class="navbar">
        <div class="container">
            <div class="nav-left">
                <h1 class="logo">Animer</h1>
            </div>
            <div id="nav-toggle" class="nav-toggle mobile-only">&equiv;</div>
            <div id="nav-right" class="nav-right desktop-only">
                <?php wp_nav_menu() ?>
            </div>
        </div>
    </div>
