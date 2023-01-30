<nav class="navbar bg-nav-color">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-md-start text-wrap">
            <a href="index.php" class="nav-link">Convert Credit Card Number</a></span>
        <div class="float-right">
            <span>

                @if (Session::has('username'))
                    {{ Session::get('username') }}
                @endif
            </span>
            @if (Session::has('username'))
                <a href="signout" class="btn btn-danger m-2">Logout</a>
            @endif

        </div>
    </div>
</nav>
