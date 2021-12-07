<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/calendar.css') ?>">

<section class="calendar">
    <section id="lists">
        
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
    </section>
    <section id="add-item">
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
    </section>
</section>

<?= $this->endsection('content') ?>