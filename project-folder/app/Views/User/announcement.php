<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/announcement.css') ?>">

<section class="announcement">
    <header>
        <h1>Announcement</h1>
    </header>
    <main>
        <section class="announce-list">
            <section class="isi">
                <h2 class="tgl-kirim">dd/mm/yyyy</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, praesentium repellat quia veniam nihil adipisci reiciendis exercitationem tempora, veritatis fugiat incidunt? Deserunt ex quos rerum, facere ipsum voluptatum asperiores odit.</p>
                <h2 class="pengirim">Nama</h2>
            </section>
            <section class="comments">
                <h2>Komentar</h2>
                <section class="form-komentar">
                    <form action="/Users/announcement/comment/add">
                        <input 
                            type="text"
                            id="isi"
                            name="isi"
                        >
                        <button type="submit" name="send" class="submit">
                            <span class="material-icons">
                                send
                            </span>
                        </button>
                    </form>
                </section>
                <section class="list-komentar">
                    <script>
                        for(let i=0; i<5; i++) {
                            document.writeln(`
                            <section class="item-komentar">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas et, culpa reprehenderit atque totam aspernatur necessitatibus nesciunt a sapiente incidunt doloribus sit nemo rerum, accusamus labore veritatis, error perspiciatis eius.
                            </section>
                            `)
                        }
                    </script>
                </section>
            </section>
        </section>
    </main>
</section>

<?= $this->endsection("content") ?>