<?= $this->extend("/User/home") ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('assets/styles/Users/profile.css') ?>">

<section class="profile">
    <header id="profile-header">
        <button onclick="location.href='/Users/editProfile'">
            Edit
        </button>
        <h1>My Profile</h1>
    </header>
    <main>
        <figure id="profpic">
            <?php

            $width=210;
            $height=(4/3)*$width;

            ?>
            <?php if($session->foto=="") : ?>
                <?php $imgSrc=base_url("assets/img/default.png") ?>
                <img src="<?= $imgSrc ?>" alt="Foto <?= $session->get('nama') ?>" width="<?= $width ?>" height="<?= $height ?>">
            <?php else : ?>
                <img src="<?= $session->get('foto') ?>" alt="Foto <?= $session->get('nama') ?>">
            <?php endif; ?>
        </figure>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $session->get('nama') ?>
                </td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <?= $session->get('npm') ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $session->get('kelas') ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $session->get('tgl_lahir') ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $session->get('alamat') ?>
                </td>
            </tr>
        </table>
    </main>
</section>

<?= $this->endsection('content') ?>