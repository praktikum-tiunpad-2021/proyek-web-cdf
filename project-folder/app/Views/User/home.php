<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <?= $this->include('Navbar'); ?>
        </header>
        <main id="main">
            <?= $this->renderSection('content'); ?>
        </main>
        <script src="<?= base_url('assets/scripts/Sidebar.js') ?>"></script>
    </body>
</html>