<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/calendar.css') ?>">

<section class="calendar">
    <section id="lists">
        <h1>Calendar</h1>
        <script>
            for(let i=0; i<3; i++) {
                document.writeln(`
                <section class="items">
                    <span>Nama</span>
                    <span>dd/mm/yyyy</span>
                    <section class="options">
                        <button onclick="location.href='/Users/calendar/update'">Edit</button>
                        <button onclick="location.href='/Users/calendar/delete'">Delete</button>
                    </section>
                </section>
                `)
            }
        </script>
        <section id="test">
            <button id="add">
                <span class="material-icons">
                    add
                </span>
            </button>
        </section>
    </section>
    <section id="add-item" style="visibility: hidden;">
        <form action="/Users/calendar/add">
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