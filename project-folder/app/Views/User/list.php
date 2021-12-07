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
            <?php if(sizeof($lists) <= 0) : ?>
                <p>List kosong</p>
            <?php else : ?>
                <?php foreach($lists as $list) : ?>
                    <section class="isi-list">
                        <div id="point"></div>
                        <section class="isi">
                            <p><?= $list["isi"] ?></p>
                            <section class="options">
                                <?php $id=$list["id"]; ?>
                                <button id="edit">Edit</button>
                                <button onclick="location.href='/Users/list/delete?id=<?= $id ?>'">Delete</button>
                            </section>
                        </section>
                    </section>
                <?php endforeach; ?>
            <?php endif; ?>
            <button id="add-list">
                <span class="material-icons">
                    add
                </span>
            </button>
        </section>

        <section id="add-item-form" style="visibility:hidden;">
            <form action="/Users/list/add" method="post">
                <h2>Tambah Item</h2>
                <section id="isi" class="form-input">
                    <label for="isi">Judul</label>
                    <input 
                        type="text"
                        name="isi"
                        required
                    >
                </section>
                <section id="keterangan" class="form-input">
                    <label for="keterangan">Deskripsi</label>
                    <textarea 
                        name="keterangan" 
                        id="keterangan" 
                        rows="5"
                        required
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