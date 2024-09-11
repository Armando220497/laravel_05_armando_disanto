<nav class="navbar navbar-expand-lg border-bottom shadow bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img class="logo" src="logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('contact.us') }}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('categorie') }}">Categorie</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
