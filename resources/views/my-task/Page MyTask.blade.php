<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Mytask</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f92c007b9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <style>
        .container {
          margin-top: 20px;
        }
      </style>
</head>

<body>
    <div class="template1">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('logo.png') }}">
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
                <a href="{{ url('#') }}" type="button" class="btn"><img src="{{ asset('profil.png')}}"></a>
            </div>
        </div>

        <div class="vertical-nav" id="sidebar">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fa-solid fa-pen-to-square"></i>
                    My Task
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-list-check"></i>
                    Workspace
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-regular fa-calendar"></i>
                    Calendar
                </a>
            </li>
            <div class="linenav"></div>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-gear"></i>
                    Setting
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-regular fa-circle-info"></i>
                    Help
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Log Out
                </a>
            </li>
        </div>

        <div class="main1">
            <div class="main2">
                <div class="container">
                    <form action="/mytask/storetask" method="POST">
                    {{ csrf_field() }}
                    <p class="createtask">Create Task</p>
                        <div class="linect"></div>
                        <br>
                      <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="6"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="subtask">Subtask:</label>
                        <input type="text" class="form-control" name="subtask" id="subtask" placeholder="Enter subtask">
                      </div>
                      <div class="form-group">
                        <label for="deadline">Deadline:</label>
                        <input type="date" class="form-control" name="deadline" id="deadline">
                      </div>
                      <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status">
                            <option>Set Status</option>
                            <option value="1">To Do</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                      </div>
                      <input type="submit" class="btn btn-block" value="DONE">
                    </form>
                  </div>
            </div>
        </div>
    </div>
</body>

</html>