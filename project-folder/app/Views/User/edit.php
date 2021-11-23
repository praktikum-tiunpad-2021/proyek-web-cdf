<?= $this->extend("User/home") ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/editProfile.css') ?>">

<section class="edit-profile">
    <header id="nav">
        <h1>Edit Profile</h1>
        <button id="switch-profile" disabled>Profile</button>
        <button id="switch-password">Password</button>
    </header>
    <form action="/Users/profile/saveProfile" method="POST" id="save-profile" class="edit-form">
        <section id="nama">
            <p>Nama</p>
            <input 
                value="<?= $session->get('nama') ?>" 
                type="text"
                name="nama"
            >
        </section>
        <section id="npm">
            <p>NPM</p>
            <input 
                value="<?= $session->get('npm') ?>" 
                type="text"
                name="npm"
                disabled
            >
        </section>
        <section id="kelas">
            <p>Kelas</p>
            <input 
                value="<?= $session->get('kelas') ?>" 
                type="text"
                name="kelas"
                pattern="[A-B]{1}"
            >
        </section>
        <section id="tgl-lahir">
            <p>Tanggal Lahir</p>
            <input 
                value="<?= $session->get('tgl_lahir') ?>" 
                type="date"
                name="tgl_lahir"
            >
        </section>
        <section id="alamat">
            <p>Alamat</p>
            <textarea 
                value="<?= $session->get('alamat') ?>" 
                name="alamat"
            ></textarea>
        </section>
        <button id="submit" type="submit">Save</button>
        <button onclick="location.href='/Users/profile'" class="back-home" type="button">Kembali</button>
    </form>
    <form action="/Users/profile/savePassword" method="POST" id="save-password" class="edit-form">
        <section id="old-password">
            <p>Old Password</p>
            <input 
                id="old-pw"
                type="text"
                name="old-pw"
            >
        </section>
        <section id="new-password">
            <p>New Password</p>
            <input 
                id="new-pw"
                type="text"
                name="new-pw"
            >
        </section>
        <section id="confirm-password">
            <p>Confirm New Password</p>
            <input 
                id="confirm-pw"
                type="text"
                name="confirm-pw"
            >
        </section>
        <button id="submit" type="submit">Save</button>
        <button onclick="location.href='/Users/profile'" class="back-home" type="button">Kembali</button>
    </form>
</section>

<script src="<?= base_url('assets/scripts/switchEditProfile.js') ?>"></script>

<?= $this->endsection('content') ?>