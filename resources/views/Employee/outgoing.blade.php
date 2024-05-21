
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
       
    <title>Outgoing</title>
    <link rel="icon" href="../assets/img/doctracklogo.png">
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
                        <a href="{{route('employee.compose')}}">
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
            <span class="name" id="name"><strong>{{$employee->firstname}}</strong></span>
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

            <div class="table-container">
                <div class="table">

                    <div class="incoming-footer-head">
                        <div class="chevron">
                            <ul>
                                <li><a href="#"><span class="material-symbols-outlined">
                                    chevron_left
                                </span>

                                </a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href=""><span class="material-symbols-outlined">
                                        chevron_right
                                    </span></a></li>
                            </ul>
                        </div>

                    </div> 
                    <div class="incoming-header">
                        <div class="table-row">
                            <div class="table-cell">Type</div>
                            <div class="table-cell">ID</div>
                            <div class="table-cell">Details</div>
                            <div class="table-cell">Required Action</div>
                            <div class="table-cell">Date & Time Created</div>
                            <div class="table-cell">Deadline</div>
                            <div class="table-cell">Action</div>


                        </div>
                    </div>
                     @foreach ($documents as $document)
                    <div class="incoming-body">
                       
                        <div class="table-row">
                            <div class="table-cell"><strong>Type</strong></div>
                            <div class="table-cell">{{$document->documents_id}}</div>
                            <div class="table-cell">{{$document->subject}} <br> {{$document->description}}</div>
                            <div class="table-cell">{{$document->action}}</div>
                            <div class="table-cell">{{$document->created_at}}</div>
                            <div class="table-cell">{{$document->deadline}}</div>
                            <div class="table-cell">
                            <button class="table-cell" onclick="toggleDropdown({{ $document->id }})">Actions</button>
                             <div class="dropdown-menu" id="dropdown-menu-{{ $document->id }}">
                             <a class="dropdown-item" href="{{ route('employee.view-document', $document->id) }}" onclick="openDialog({{ $document->id }})">View Document</a>
                            <a class="dropdown-item" href="{{ route('documents.moveToPending', $document->id) }}">Move to Pending</a>
                            <a class="dropdown-item" href="{{ route('documents.moveToArchive', $document->id) }}">Move to Archive</a>
                            </div>
                            </div>
                                </div>
                            </div>
                        </div>
                       @endforeach 
                    </div>
    

        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/logout-darkmode.js"></script>
        <script src="../js/script.js"></script>

</body>

</html>
