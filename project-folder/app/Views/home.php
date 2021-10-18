<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=s, initial-scale=1.0">
        <title>Gopher 2020</title>

        <link rel="stylesheet" href="assets/styles/index.css">
    </head>
    <body>
        <nav>
            <a href="/login">
                <button>Login</button>
            </a>
        </nav>
        <main>
            <article id="gopher">
                <img src="assets/img/gopher.png" alt="Logo Gopher">
                <section id="intro">
                    <h2>Gopher 2020</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </article>
            <article id="koordinator" class="anggota">
                <h4>Koordinator & Wakil Koordinator</h4>
                <section id="foto">
                    <!-- Ini masih default display -->
                    <!-- Akan terisi oleh backend -->
                    <figure>
                        <img class="foto-orang" src="assets/img/default.png" alt="Foto Koor">
                        <figcaption>Nama</figcaption>
                        <figcaption>140810200xxx</figcaption>
                    </figure>
                    <figure>
                        <img class="foto-orang" src="assets/img/default.png" alt="Foto Wakoor">
                        <figcaption>Nama</figcaption>
                        <figcaption>140810200xxx</figcaption>
                    </figure>
                </section>
            </article>
            <article id="anggota" class="anggota">
                <h4>Anggota</h4>
                <section id="list">
                    <!-- Ini masih default display -->
                    <!-- Akan terisi oleh backend -->
                    <script>
                        const html = `
                            <figure>
                                <figcaption>Nama</figcaption>
                                <figcaption>140810200xxx</figcaption>
                            </figure>
                        `;

                        for(let i=0; i<12; i++) {
                            document.writeln(html);
                        }
                    </script>
                </section>
            </article>
        </main>
    </body>
</html>