<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Guian Laravel Crud</title>
</head>
<style>
form {

    border-radius: 20px;
    padding: 1.3rem;
    width: 500px;
    margin: 2rem auto;



}

.btn {
    padding: 15px;
    border: 0;
    text-shadow: 1px 1px 0px rgba(0, 0, 0, .4);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: black;
    color: #fff;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    position: relative;
}

#sidebar .h6 {
    color: #fff;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar.active .custom-menu {
    margin-right: -50px;
}

#sidebar h1 {
    margin-bottom: 20px;
    font-weight: 700;
}

#sidebar h1 .logo {
    color: #fff;
}

#sidebar ul.components {
    padding: 0;
}

#sidebar ul li {
    font-size: 16px;
}

#sidebar ul li>ul {
    margin-left: 10px;
}

#sidebar ul li>ul li {
    font-size: 14px;
}

#sidebar ul li a {
    padding: 10px 0;
    display: block;
    color: rgba(255, 255, 255, 0.8);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

#sidebar ul li a:hover {
    color: #fff;
}

#sidebar ul li.active>a {
    background: transparent;
    color: #fff;
}

@media (max-width: 991.98px) {
    #sidebar {
        margin-left: -250px;
    }

    #sidebar.active {
        margin-left: 0;
    }

    #sidebar .custom-menu {
        margin-right: -50px !important;
        top: 10px !important;
    }
}

#sidebar .custom-menu {
    display: inline-block;
    position: absolute;
    top: 20px;
    right: 0;
    margin-right: -20px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}

@media (prefers-reduced-motion: reduce) {
    #sidebar .custom-menu {
        -webkit-transition: none;
        -o-transition: none;
        transition: none;
    }
}

#sidebar .custom-menu .btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

#sidebar .custom-menu .btn.btn-primary {
    background: #6749b9;
    border-color: #6749b9;
}

#sidebar .custom-menu .btn.btn-primary:hover,
#sidebar .custom-menu .btn.btn-primary:focus {
    background: #6749b9 !important;
    border-color: #6749b9 !important;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

@media (max-width: 991.98px) {
    #sidebarCollapse span {
        display: none;
    }
}

#content {
    width: 100%;
    padding: 0;
    min-height: 100vh;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}




@import url('https://fonts.googleapis.com/css?family=Abel');

body {
    background-image: url("");
    background-repeat: no-repeat;
    background-size: cover;
}



.center {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
}

.card {
    width: 450px;
    height: 250px;
    background-color: ;
    /* background: linear-gradient(#f8f8f8, #fff); */
    box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
    border-radius: 6px;
    overflow: hidden;
    position: relative;
    margin: 1.5rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    ">

}

.card h1 {
    text-align: center;
}

.card .additional {
    position: absolute;
    width: 150px;
    height: 100%;
    background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);
    transition: width 0.4s;
    overflow: hidden;
    z-index: 2;
}

.card.green .additional {
    background: linear-gradient(#92bCa6, #A2CCB6);
}


.card:hover .additional {
    width: 100%;
    border-radius: 0 5px 5px 0;
}

.card .additional .user-card {
    width: 150px;
    height: 100%;
    position: relative;
    float: left;
}

.card .additional .user-card::after {
    content: "";
    display: block;
    position: absolute;
    top: 10%;
    right: -2px;
    height: 80%;
    border-left: 2px solid rgba(0, 0, 0, 0.025);
    */
}

.card .additional .user-card .level,
.card .additional .user-card .points {
    top: 15%;
    color: #fff;
    text-transform: uppercase;
    font-size: 0.75em;
    font-weight: bold;
    background: rgba(0, 0, 0, 0.15);
    padding: 0.125rem 0.75rem;
    border-radius: 100px;
    white-space: nowrap;
}

.card .additional .user-card .points {
    top: 85%;
}

.card .additional .user-card svg {
    top: 50%;
}

.card .additional .more-info {
    width: 300px;
    float: left;
    position: absolute;
    left: 150px;
    height: 100%;
}

.card .additional .more-info h1 {
    color: #fff;
    margin-bottom: 0;
}

.card.green .additional .more-info h1 {
    color: #224C36;
}

.card .additional .coords {
    margin: 0 1rem;
    color: #fff;
    font-size: 1rem;
}

.card.green .additional .coords {
    color: #325C46;
}

.card .additional .coords span+span {
    float: right;
}

.card .additional .stats {
    font-size: 2rem;
    display: flex;
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    top: auto;
    color: #fff;
}

.card.green .additional .stats {
    color: #325C46;
}

.card .additional .stats>div {
    flex: 1;
    text-align: center;
}

.card .additional .stats i {
    display: block;
}

.card .additional .stats div.title {
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
}

.card .additional .stats div.value {
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5rem;
}

.card .additional .stats div.value.infinity {
    font-size: 2.5rem;
}

.card .general {
    width: 300px;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
    box-sizing: border-box;
    padding: 1rem;
    padding-top: 0;
}

.card .general .more {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    font-size: 0.9em;
}
</style>

<body>


    <nav class="nav bg-dark text-light ">
        <h1 class="ml-5">
            Simple Crud by the Power of Laravel
        </h1>
    </nav>

    <div class="container">

        @yield('content')

    </div>


</body>

</html>