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
        <a href="/Users/home">
            <img src="<?= base_url('assets/img/gopher.png') ?>" alt="Logo Gopher">
        </a>
    </header>
    <section id="links">
        <ul>
            <li>
                <a href="/Users/profile">Profile</a>
            </li>
            <li>
                <a href="/Users/calendar">Timeline</a>
            </li>
            <li>
                <a href="/Users/list">To Do List</a>
            </li>
        </ul>
    </section>
    <button id="logout" onclick="location.href='/logout'">
        <span class="material-icons" style="transform:rotate(180deg)">
            logout  
        </span>
        Logout
    </button>
</nav>