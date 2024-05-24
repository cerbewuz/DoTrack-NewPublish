<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Dashboard</title>
    <link rel="icon" href="../assets/app/doctracklogo.png">
</head>

<body>
    <div class="wrapper-main-2">
        <div class="sidebar">
            <div class="container-flex-sidebar">
                <div class="image-text">
                    <img src="../assets/img/doctracklogo.png" alt="">
                </div>
                <div class="menu-bar">
                    <div class="compose-Container active">
                        <a href="{{route("employee.compose")}}">
                            <div class="list">
                                <span class="material-symbols-outlined">
                                    edit_document
                                </span>
                                <span>Compose Mail</span>
                            </div>
                        </a>
                    </div>
                    <div class="link-Container">

                        <a href="{{route('employee.home')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                                <span>Home</span>
                            </div>
                        </a>
                        <a href="{{route('employee.incoming')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    move_to_inbox
                                </span>
                                <span>Incoming</span>
                            </div>
                        </a>
                        <a href="{{route('employee.pending')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    pending_actions
                                </span><span>Pending</span>
                            </div>
                        </a>
                        <a href="{{route('employee.received')}}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    check_circle
                                </span><span>Received</span></div>
                        </a>
                        <a href="{{route('employee.outgoing')}}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    outgoing_mail
                                </span> <span>Outgoing</span></div>
                        </a>
                        <a href="{{route('employee.archive')}}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    archive
                                </span><span>Archive</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-bar">
            <div class="heading-content">
                <div class="heading-content-searchbar">
                    <input type="text" placeholder="   Search...">
                </div>



                <div class="profile-button">
            <img src="../assets/img/sam.png" alt="Profile Picture" class="profile-pic">
            <span class="name" id="name"><strong>{{$employee_name   }}</strong></span>
            <div class="dropdown-menu">
                <a href="{{route('admin.profile')}}">Profile</a>
                <a href="#" id="dark-mode-toggle">Dark mode</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
                

            </div>

        </div>


        <div class="content">
            <div class="home-table">
                <div class="box-table B">
                    <div class="body">
                        <h3>My Task</h3>
                        <div class="abc">
                            <span class="counter" id="task-counter">0</span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <a href="{{route('employee.incoming')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="box-table Y">
                    <div class="body">
                        <h3>Contributed Document</h3>
                        <div class="abc">
                            <span class="counter" id="contributed-counter">0</span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <a href="{{route('employee.pending')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="box-table G">
                    <div class="body">
                        <h3>Outgoing Document</h3>
                        <div class="abc">
                            <span class="counter" id="outgoing-doc-counter">0</span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <a href="{{route('employee.outgoing')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a>
                        </div>
                    </div>
                </div>
                <div class="box-table R">
                    <div class="body">
                        <h3>Finished Document</h3>
                        <div class="abc">
                            <span class="counter" id="finished-counter">0</span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                            <a href="{{route('employee.received')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script src="../js/logout-darkmode.js"></script>
    

</body>

</html>