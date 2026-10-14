<style>
/* Modern Tourism Admin Header */
.header-main {
    background: linear-gradient(135deg, #102a43, #087e8b);
    padding: 18px 30px;
    min-height: 90px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    box-sizing: border-box;
}

.logo-w3-agile h1 {
    margin: 0;
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 0.5px;
}

.logo-w3-agile h1 a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.logo-w3-agile h1 a:hover {
    color: #a7f3e8;
}

.profile_details {
    margin-left: auto;
}

.profile_details ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.profile_details .profile_img {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 14px;
    border-radius: 12px;
    transition: background 0.3s ease;
}

.profile_details .profile_details_drop > a {
    display: block;
    color: white;
    text-decoration: none;
}

.profile_details .profile_img:hover {
    background: rgba(255, 255, 255, 0.12);
}

.profile_details .prfil-img img {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #a7f3e8;
}

.profile_details .user-name p {
    margin: 0 0 4px;
    color: #c8f7f0;
    font-size: 12px;
}

.profile_details .user-name span {
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
}

.profile_details .fa-angle-down,
.profile_details .fa-angle-up {
    color: #ffffff;
    margin-left: 8px;
}

.profile_details .dropdown-menu {
    min-width: 180px;
    margin-top: 8px;
    padding: 8px;
    background: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.18);
}

.profile_details .dropdown-menu li a {
    display: block;
    padding: 11px 12px;
    color: #243b53;
    text-decoration: none;
    border-radius: 7px;
    transition: all 0.2s ease;
}

.profile_details .dropdown-menu li a i {
    margin-right: 9px;
    color: #087e8b;
}

.profile_details .dropdown-menu li a:hover {
    background: #e6fffa;
    color: #087e8b;
}

@media (max-width: 600px) {
    .header-main {
        padding: 15px;
        gap: 10px;
    }

    .logo-w3-agile h1 {
        font-size: 19px;
    }

    .profile_details .profile_img {
        padding: 6px;
        gap: 7px;
    }

    .profile_details .prfil-img img {
        width: 36px;
        height: 36px;
    }
}
</style>

<div class="header-main">

    <div class="logo-w3-agile">
        <h1>
            <a href="dashboard.php">Tourism Management System</a>
        </h1>
    </div>

    <div class="profile_details w3l">
        <ul>
            <li class="dropdown profile_details_drop">

                <a href="#" class="dropdown-toggle"
                   data-toggle="dropdown" aria-expanded="false">

                    <div class="profile_img">

                        <span class="prfil-img">
                            <img src="images/User-icon.png"
                                 alt="Administrator">
                        </span>

                        <div class="user-name">
                            <p>Welcome</p>
                            <span>Administrator</span>
                        </div>

                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>

                    </div>
                </a>

                <ul class="dropdown-menu drp-mnu">
                    <li>
                        <a href="profile.php">
                            <i class="fa fa-user"></i> Profile
                        </a>
                    </li>

                    <li>
                        <a href="change-password.php">
                            <i class="fa fa-cog"></i> Settings
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>

    <div class="clearfix"></div>

</div>