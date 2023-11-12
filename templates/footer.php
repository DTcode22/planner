<div class="footer-content">

    <div class="copyright">
        Copyright &copy;
        <p id="copyright"></p> | All rights reserved.
    </div>
</div>
<script>
    document.querySelector("#copyright").textContent = new Date()
        .getFullYear()
        .toString();
    document.querySelector("#scroll").addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>
<style>
    .footer-content {
        width: 100%;
        height: 14vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(50, 50, 50);
        color: aliceblue;
    }

    span {
        display: flex;
        align-items: center;
        font-family: "DM Sans", sans-serif;
        font-size: 16px;
        padding: 1.6px 12px;
        gap: 4px;
        justify-content: center;
    }

    .copyright {
        display: flex;
        align-items: center;
        justify-content: center;
        outline: unset;
        height: 50%;
        width: 100%;
        color: #f1f1f1;
        font-weight: 400;
        font-size: 14px;
        /* border-top: 1px solid #a0a0a0; */
    }
</style>