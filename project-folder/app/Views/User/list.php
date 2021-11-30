<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/list.css') ?>">

<section class="list">
    <header>
        <div id="clip"></div>
        <h1>To Do List</h1>
    </header>
    <main>
        <section id="to-do-list">
            <section class="isi-list">
                <div id="point"></div>
                <section class="isi">
                    <p>Item 1</p>
                </section>
                <section class="options" style="visibility:hidden">
                    <button>Edit</button>
                    <button>Delete</button>
                </section>
            </section>
            <button id="add-list">
                <span class="material-icons">
                    add
                </span>
            </button>
        </section>

        <section id="add-item-form" style="visibility:hidden;">
            <form action="/User/list/add">
                <h2>Tambah Item</h2>
                <section id="isi" class="form-input">
                    <label for="isi">Judul</label>
                    <input 
                        type="text"
                        name="isi"
                    >
                </section>
                <section id="keterangan" class="form-input">
                    <label for="keterangan">Deskripsi</label>
                    <textarea 
                        name="keterangan" 
                        id="keterangan" 
                        rows="5"
                    ></textarea>
                </section>
                <button type="submit" name="add" id="add">Add</button>
            </form>
            <div id="backdrop"></div>
        </section>
    </main>
</section>

<script src="<?= base_url('assets/scripts/showAddList.js') ?>"></script>

<?= $this->endsection('content') ?>