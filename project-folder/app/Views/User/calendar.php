<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/calendar.css') ?>">

<section class="calendar">
    <section id="lists">
        <h1>Calendar</h1>
        <?php if(sizeof($calendar) <= 0) : ?>
            <section>
                Belum ada item dalam calendar ini
            </section>
        <?php else : ?>
            <?php foreach($calendar as $cal) : ?>
                <section class="items">
                    <span><?= $cal["isi"] ?></span>
                    <span><?= $cal["tanggal"] ?></span>
                    <section class="options">
                        <?php $id=$cal["id"]; ?>
                        <button onclick="location.href='/Users/calendar/update'">Edit</button>
                        <button onclick="location.href='/Users/calendar/delete?id=<?= $id ?>'">Delete</button>
                    </section>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>
        <section id="test">
            <button id="add">
                <span class="material-icons">
                    add
                </span>
            </button>
        </section>
    </section>
    <section id="add-item" style="visibility: hidden;">
        <form action="/Users/calendar/add" method="post">
            <h2>Add New Timeline</h2>
            <section id="nama-event">
                <label for="isi">Nama Event</label>
                <input 
                    type="text"
                    name="isi"
                    id="isi"
                >
            </section>
            <section id="tanggal-event">
                <label for="tanggal">Tanggal</label>
                <input 
                    type="date"
                    name="tanggal"
                    id="tanggal"
                >
            </section>
            <section id="options">
                <button id="save" name="save" type="submit">Save</button>
            </section>
        </form>
        <div id="backdrop"></div>
    </section>
</section>

<script src="<?= base_url('assets/scripts/showAddCalendar.js') ?>"></script>

<?= $this->endsection('content') ?>