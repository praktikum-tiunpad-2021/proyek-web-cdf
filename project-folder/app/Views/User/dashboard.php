<?= $this->extend("/User/home") ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/dashboard.css') ?>">

<section class="dashboard">
    <h1>Halo <?= $session->get('nama') ?> </h1>
    <section class="announcement">
        <h2 onclick="location.href='/Users/announcement'">Announcement</h2>
        <section class="isi">
            <h3>Nama</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem est adipisci rerum aspernatur, rem corrupti tempore incidunt unde tenetur commodi, maiores nobis illum voluptate eveniet quisquam sit qui, voluptatibus deleniti?</p>
        </section>
        <section class="isi">
            <h3>Nama</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem est adipisci rerum aspernatur, rem corrupti tempore incidunt unde tenetur commodi, maiores nobis illum voluptate eveniet quisquam sit qui, voluptatibus deleniti?</p>
        </section>
    </section>
    <section class="to-do-list">
        <h2 onclick="location.href='/Users/list'">To Do List</h2>
        <section class="isi">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptate expedita error hic magnam veniam animi sed repellat dolorem laboriosam ea, quo nemo ad placeat nam nesciunt soluta voluptatibus quasi?</p>
        </section>
        <section class="isi">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam quas optio voluptates consequatur saepe, rerum, necessitatibus possimus molestiae obcaecati explicabo est beatae molestias velit illo vel excepturi, neque magnam dolorum?</p>
        </section>
    </section>
    <section class="calendar">
        <h2 onclick="location.href='/Users/calendar'">Calendar</h2>
        <section id="list">
            <section class="isi">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iure suscipit non modi officia, molestiae quas provident sequi dolorem voluptatibus dolor magnam ratione! Officiis, voluptatem ratione quae itaque minus quis.</p>
            </section>
            <section class="isi">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil et quaerat culpa tempore magnam non corporis facilis totam? Sequi nesciunt laboriosam illum porro commodi tenetur dignissimos, debitis quam atque in?</p>
            </section>
        </section>
    </section>
</section>

<?= $this->endsection('content'); ?>