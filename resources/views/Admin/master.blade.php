<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="nav navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container p-1">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand text-white">Admin PAnel</a>

            <ul class="navbar-nav ">
                <li class="nav-tem">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" value="Logout" class="nav-link bg-transparent border-0">
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-3">
                <div class="list-group">
                    <a href="{{ route('admin.dashboard') }}"
                        class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{ route('admin.manageStudent.newAd') }}"
                        class="list-group-item list-group-item-action">ManageStudent</a>
                    <a href="" class="list-group-item list-group-item-action">Manage Payment</a>
                    <a href="{{ route('course.index') }}" class="list-group-item list-group-item-action">ManageCourse</a>
                    <a href="" class="list-group-item list-group-item-action">Manage pLacement</a>
                </div>
            </div>
            <div class="col-9">
                @section('content')
                @show
            </div>
        </div>
    </div>
</body>

</html>