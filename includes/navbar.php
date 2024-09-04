<?php
$activePage = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<header>
    <nav class="navbar navbar-expand-lg <?= $activePage != "index.php" ? 'navbar-2' : '' ?>" id="Navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>Armando</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "index.php" ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "book.php" ? 'active' : '' ?>" href="book.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "author.php" ? 'active' : '' ?>" href="author.php">Author</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $activePage == "contact.php" ? 'active' : '' ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-white" id="navBtn" type="submit">Buy Now</a>
            </div>
        </div>
    </nav>
</header>