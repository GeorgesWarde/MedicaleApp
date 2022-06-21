<?php
include_once './php/config.php';
?>
<header>

    <nav class="navbar navbar-expand-lg navbar-light " aria-label="Fifth navbar example">

        <div class="container-xl">
            <a class="navbar-brand" href="index">MedicalCenter</a>
            <button class="navbar-toggler menu-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">

                <ul class="navbar-nav f WhiteColor ms-auto">

                    <li class="nav-item dropdown navbar-items ">

                        <a class="nav-link " href="appointment">Make an appointment</a>

                    </li>

                    <li class="nav-item dropdown navbar-items">

                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item dropdown navbar-items">
                        <?php
                        if ($_SESSION) { ?>
                        <a class="nav-link" href="logout">Logout</a>
                        <?php } ?>
                    </li>
                </ul>


            </div>
        </div>

    </nav>

</header>