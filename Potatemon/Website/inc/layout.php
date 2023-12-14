<?php

function GetNavBar(){
    ?>
    <nav class="navbar navbar-expand-lg shadow-sm"
        style="background-color: var(--bs-content-bg); border-bottom: var(--bs-border-width) solid var(--bs-content-border-color);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/NovaSpaceTransparent.png" alt="Logo" width="220" height="70"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-offcanvas"
                aria-controls="navbar-offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" id="navbar-offcanvas">
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="dataComparisonCC.php">Data Comparison</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="employees.php">Employees</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php
}

?>