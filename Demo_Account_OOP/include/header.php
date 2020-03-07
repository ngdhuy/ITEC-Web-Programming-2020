<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php?a=1">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?a=7">Post</a>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            <?php
                if(isset($_SESSION['user']) == true) {
                    ?>
                        <li class="nav-item my-2 my-lg-2 active">
                            <span class="nav-link">Welcome, <?php echo unserialize($_SESSION['user'])->fullname; ?> | </span>
                        </li>
                        <li class="nav-item my-2 my-lg-2 active">
                            <a class="nav-link" href="./index.php?a=4">Log-out</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li class="nav-item my-2 my-lg-2 active">
                            <a class="nav-link" href="./index.php?a=2">Login/Register</a>
                        </li>
                    <?php
                }
            ?>
            
            
        </ul>
    </div>
</nav>