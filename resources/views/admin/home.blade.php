<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
     <title>DoTrack - Admin</title>
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="icon" href="../assets/img/doctracklogo.png">
     <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   

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
                        <a href="{{route("admin.compose")}}">
                            <div class="list">
                                <span class="material-symbols-outlined">
                                    edit_document
                                </span>
                                <span>Compose Mail</span>
                            </div>
                        </a>
                    </div>
                    <div class="link-Container">

                        <a href="{{route('admin.home')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                                <span>Home</span>
                            </div>
                        </a>
                        <a href="{{route('admin.incoming')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    move_to_inbox
                                </span>
                                <span>Incoming</span>
                            </div>
                        </a>
                        <a href="{{route('admin.pending')}}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    pending_actions
                                </span><span>Pending</span>
                            </div>
                        </a>
                        <a href="{{route('admin.received')}}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    check_circle
                                </span><span>Received</span></div>
                        </a>
                        <a href="{{route('admin.outgoing')}}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    outgoing_mail
                                </span> <span>Outgoing</span></div>
                        </a>
                        <a href="{{route('admin.archive')}}">
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
            <span class="name" id="name"><strong>{{$admin_name}}</strong></span>
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
                            <h1></h1>
                           
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                           <a href="{{route('admin.incoming')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a> 
                            
                        </div>
                    </div>
                </div>

                <div class="box-table Y">
                    <div class="body">

                        <h3>Contributed Document</h3>
                        <div class="abc">
                            <h1></h1>
                            
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                           <a href="{{route('admin.pending')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a> 
                            
                        </div>
                    </div>

                </div>

                <div class="box-table G">
                    <div class="body">
                        <h3>Outgoing Document</h3>
                        <div class="abc">
                            <h1></h1>
                           
                        </div>

                    </div>
                    <div class="footer">
                        <div class="chevron">
                           <a href="{{route('admin.outgoing')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a> 
                            
                        </div>
                    </div>
                </div>

                <div class="box-table R">
                    <div class="body">
                        <h3>Finished Document</h3>
                        <div class="abc">
                            <h1></h1>
                            
                        </div>
                    </div>
                    <div class="footer">
                        <div class="chevron">
                           <a href="{{route('admin.received')}}">View Details<span class="material-symbols-outlined">
                                chevron_right
                            </span></a>                            
                        </div>
                    </div>

                </div>



            </div>







        </div>
    </div>
    
    <script src="../js/logout-darkmode.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>