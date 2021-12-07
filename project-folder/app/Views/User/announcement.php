<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/announcement.css') ?>">

<section class="announcement">
    <header>
        <h1>Announcement</h1>
    </header>
    <main>
        <section id="add-announcement">
            <form action="/Users/announcement/add" method="post">
                <section id="input-isi">
                    <input 
                        type="text"
                        name="isi"
                        id="isi"
                        placeholder="Apa yang ingin di post?"
                    >
                </section>
                <section id="options">
                    <button type="submit">Post</button>
                </section>
            </form>
        </section>
        <?php foreach($announcement as $announce) : ?>
            <section class="announce-list">
                <section class="isi">
                    <h2 class="tgl-kirim"><?= $announce["tgl_post"] ?></h2>
                    <p>
                        <?= $announce["isi"] ?>
                    </p>
                </section>
                <section class="comments">
                    <h2>Komentar</h2>
                    <?php $id=$announce["id"] ?>
                    <section class="form-komentar">
                        <form action="/Users/announcement/comment/add" method="post">
                            <input 
                                type="text"
                                id="isi"
                                name="isi"
                            >
                            <input 
                                type="hidden"
                                name="id_announcement"
                                value="<?= $id ?>"
                            >
                            <button type="submit" name="send" class="submit">
                                <span class="material-icons">
                                    send
                                </span>
                            </button>
                        </form>
                    </section>
                    <section class="list-komentar">
                        <?php foreach($comments as $comment) : ?>
                            <?php if($comment["id_announcement"] == $id) : ?>
                                <section class="item-komentar">
                                    <?= $comment["isi"] ?>
                                </section>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </section>
                </section>
            </section>

        <?php endforeach; ?>
    </main>
</section>

<?= $this->endsection("content") ?>