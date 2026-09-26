<nav class="navbar">
    <div class="nav-container">

        <div class="logo">
            US<span>ER</span>
        </div>

        <div class="nav-menu">

            <a href="/user"
               class="{{ request()->is('user') ? 'active' : '' }}">
                Daftar User
            </a>

            <a href="/user/create"
               class="{{ request()->is('user/create') ? 'active' : '' }}">
                Tambah User
            </a>

        </div>

    </div>
</nav>

<style>
    .navbar {
        width: 100%;
        background-color: #171717;
        box-shadow: 0 5px 0px #c03939;
    }

    .nav-container {
        max-width: 1100px;
        margin: auto;
        padding: 18px 30px;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 22px;
        font-weight: bold;
        color: #f5ead7;
        letter-spacing: 1px;
    }

    .logo span {
        color: #c03939;
    }

    .nav-menu {
        display: flex;
        gap: 25px;
    }

    .nav-menu a {
        color: #f5ead7;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        transition: 0.2s;
    }

    .nav-menu a:hover {
        color: #c03939;
    }

    .nav-menu a.active {
        color: #c03939;
    }
</style>