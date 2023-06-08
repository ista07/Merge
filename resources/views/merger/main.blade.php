<!DOCTYPE html>
<html lang="en">

<head>
    <title>Overview</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.css"
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f92c007b9c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="template2">
        <div class="header">
            <div class="logo">
                <img src="{{ ('asset/logo.png') }}">
            </div>
            <div class="home">
                <div class="hometext">Home</div>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Workspace</i></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Item 1</a>
                    <a class="dropdown-item" href="#">Item 2</a>
                    <a class="dropdown-item" href="#">Item 3</a>
                    <a class="dropdown-item" href="#">Item 4</a>
                    <a class="dropdown-item" href="#">Item 5</a>
                    <a class="dropdown-item" href="#">Item 6</a>
                </div>
            </div>

            <form class="search" onsubmit="return false">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="bell">
                <a href="{{ url('#') }}" type="button" class="btn"><i class="fa-regular fa-bell"></i></a>
            </div>
            <div class="profil">
                <a href="{{ url('#') }}" type="button" class="btn"><img src="{{ ('') }}"></a>
            </div>
        </div>

        <div class="vertical-nav" id="sidebar">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fa-solid fa-book"></i>
                    Overview
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-shuffle"></i>
                    Slashwork
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-file"></i>
                    Merger
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-bars-progress"></i>
                    Progress
                </a>
            </li>
            <div class="linenav"></div>
        </div>

        <div class="main1">
            <div class="main2">
                <div class="kotak1">
                    <form action="{{route('uploadedfile.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('sweetalert::alert')
                            <input type="file" id="file-input" name="Dokumen"/ >
                            <input type="submit">
                    </form>

                    <span class="textkotak1">Format file yang didukung hanyalah PDF</span>
                </div>

                <span class="textkotak2">Dokumen diunggah </span>
                <div class="kotak2">
                    @yield('file')
                    <a href="/merger1" class="btn btn-xs btn-success pull-center my-2" id="mergefile">Merge PDF</a>

                </div>
            </div>
        </div>
    </div>
</body>
</html>