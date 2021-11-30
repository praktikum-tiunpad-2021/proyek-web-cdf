<?= $this->extend("/User/home") ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/dashboard.css') ?>">

<section class="dashboard">
    <h1>Halo <?= $session->get('nama') ?> </h1>
    <section class="announcement">
    
    </section>
    <section class="to-do-list">

    </section>
    <section class="calendar">
        
    </section>
</section>

<?= $this->endsection('content'); ?>