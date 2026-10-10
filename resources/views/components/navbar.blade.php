<nav class="navbar">
    <div class="nav-container">

        <div class="nav-menu">
            <a href="/user"
               class="{{ request()->is('user') && !request()->is('user/*') ? 'active' : '' }}">
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
        border-bottom: 4px solid #4f63ed;
    }

    .nav-container {
        max-width: 1100px;
        margin: auto;
        padding: 18px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .nav-menu a {
        color: #d1d5db;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        transition: color 0.2s;
    }

    .nav-menu a:hover {
        color: #8190ff;
    }

    .nav-menu a.active {
        color: #8190ff;
    }

    @media (max-width: 600px) {
        .nav-container {
            padding: 16px 20px;
            flex-wrap: wrap;
        }

        .nav-menu {
            gap: 16px;
        }

        .nav-menu a {
            font-size: 13px;
        }
    }
</style>