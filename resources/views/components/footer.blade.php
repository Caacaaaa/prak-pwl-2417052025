<footer class="footer">
    <div class="footer-content">

        <div class="footer-brand">
            <h3>US<span>ER</span></h3>
            <p>Web Programming TL</p>
        </div>

        <div class="footer-info">
            <p>© 2026 Salsabila Yuriska</p>
            <p>All rights reserved.</p>
        </div>

    </div>
</footer>

<style>
    .footer {
        margin-top: 200px;
        background-color: #171717;
        color: #ffffff;
        border-top: 4px solid #4f63ed;
    }

    .footer-content {
        max-width: 1100px;
        margin: auto;
        padding: 25px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .footer-brand h3 {
        margin: 0 0 8px;
        font-size: 22px;
        letter-spacing: 1px;
    }

    .footer-brand h3 span {
        color: #4f63ed;
    }

    .footer-brand p {
        margin: 0;
        font-size: 13px;
        color: #b8c3dc;
    }

    .footer-info {
        text-align: right;
    }

    .footer-info p {
        margin: 5px 0;
        font-size: 12px;
        color: #d1d5db;
    }

    @media (max-width: 600px) {
        .footer-content {
            padding: 22px 20px;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-info {
            text-align: left;
        }
    }
</style>