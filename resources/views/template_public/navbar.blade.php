<nav class="navbar bg-primary shadow-lg">
    <div class=" container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="https://static.vecteezy.com/system/resources/previews/000/365/241/original/vector-al-quran.jpg"
                alt="Bootstrap" class=" rounded-circle shadow-lg" width="50" height="50">
        </a>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white btn btn-success" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
