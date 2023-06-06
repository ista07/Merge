<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Workspace</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header id="header" class="fixed-top rounded-bottom">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{ asset('logo.png') }}" width="80" style="display: center">
                </div>
            </div>
        </div>
    </header>

    <main id="main">
        <main id="main1">
            <div class="vertical-nav bg-white" id="sidebar">
                <ul class="nav flex-column bg-white">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">
                            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                            My Task
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link text-dark bg-light">
                            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                            Workspace
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">
                            <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                            Calendar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">
                            <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                            Setting
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">
                            <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">
                            <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </main>

        <main id="main2">
            <h5>Create Task</h5>
            <br>
            <form action="/workspace/storeform" method="POST">
                {{ csrf_field() }}
                <div class="row ">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="title" class="form-label">Title</label>
                            <input id="title" name="title" class="form-control" type="text" placeholder="Write your task title" required="required" />
                        </div>
                        <div>
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Write your task deskription" rows="6" required="required"></textarea>
                        </div>
                        <div>
                            <label for="subtask" class="form-label">Subtask</label>
                            <input id="subtask" name="subtask" class="form-control" type="text" placeholder="Add subtask" required="required"/>
                        </div>
                        <div>
                            <label for="deadline" class="form-label">Set Deadline</label>
                            <input id="deadline" name="deadline" class="form-control" type="date" required="required"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="profilimage" class="form-label">Profil Image</label>
                            <input class="form-control" name="profilimage" type="file" id="profilimage" required="required">
                        </div>
                        <div>
                            <label for="leader" class="form-label">Leader Name</label>
                            <input id="leader" name="leader" class="form-control" type="text" placeholder="Write the leader name" required="required"/>
                        </div>
                        <label for="priority" class="form-label">Priority</label>
                        <select id="priority" name="priority" class="form-select" >
                            <option>Set Priority</option>
                            <option value="1">High</option>
                            <option value="2">Medium</option>
                            <option value="3">Low</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="DONE">
            </form>
        </main>
    </main>
</body>

</html>
