<div class="navbar-content">
    <div class="slikalogo"></div>

    <div class="links">
        <a href="/planner/index.php">Homepage</a>
        <a href="/planner/pages/dashboard.php">Dashboard</a>
        <a href="/planner/pages/register.php">Register</a>
    </div>
</div>
<style>
    .navbar-content {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: rgb(50, 50, 50);
        color: aliceblue;
    }

    .links {
        display: flex;
        width: 280px;
        justify-content: space-between;
        padding-right: 50px;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        color: azure;
    }

    a:hover {
        color: rgba(240, 255, 255, 0.722);
    }

    .slikalogo {
        width: 106px;
        height: 50px;
        background-image: url("../assets/images/plannerLogo.PNG");
        background-size: cover;
        margin-left: 50px;
    }
</style>