<link rel="stylesheet" href="<?= base_url('assets/styles/navbar.css') ?>">

<aside>
    <button id="open">
        <span class="material-icons">
            menu
        </span>
    </button>
</aside>

<nav id="sidebar">
    <button id="close">
        <span class="material-icons">
            close
        </span>
    </button>
    <header>
        <img src="<?= base_url('assets/img/gopher.png') ?>" alt="Logo Gopher">
    </header>
    <section id="links">
        <ul>
            <li>
                <a href="#">Profile</a>
            </li>
            <li>
                <a href="#">Timeline</a>
            </li>
            <li>
                <a href="#">To Do List</a>
            </li>
        </ul>
    </section>
    <button id="logout">
        <span class="material-icons" style="transform:rotate(180deg)">
            logout  
        </span>
        Logout
    </button>
</nav>

<script src="<?= base_url('assets/scripts/Sidebar.js') ?>"></script>