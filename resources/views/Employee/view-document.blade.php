<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>View Document</title>
    <link rel="icon" href="{{ asset('assets/img/doctracklogo.png') }}">
</head>

<body>
    <div class="wrapper-main-2">
        <div class="sidebar">
            <div class="container-flex-sidebar">
                <div class="image-text">
                    <img src="{{ asset('assets/img/doctracklogo.png') }}" alt="">
                </div>
                <div class="menu-bar">
                    <div class="compose-Container active">
                        <a href="{{ route('employee.compose') }}">
                            <div class="list">
                                <span class="material-symbols-outlined">
                                    edit_document
                                </span>
                                <span>Compose Mail</span>
                            </div>
                        </a>
                    </div>
                    <div class="link-Container">
                        <a href="{{ route('employee.home') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                                <span>Home</span>
                            </div>
                        </a>
                        <a href="{{ route('employee.incoming') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    move_to_inbox
                                </span>
                                <span>Incoming</span>
                            </div>
                        </a>
                        <a href="{{ route('employee.pending') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    pending_actions
                                </span><span>Pending</span>
                            </div>
                        </a>
                        <a href="{{ route('employee.received') }}">
                            <div class="list2"><span class="material-symbols-outlined">
                                check_circle
                                </span><span>Received</span></div>
                        </a>
                        <a href="{{ route('employee.outgoing') }}">
                            <div class="list2"><span class="material-symbols-outlined">
                                outgoing_mail
                                </span> <span>Outgoing</span></div>
                        </a>
                        <a href="{{ route('employee.archive') }}">
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
                    <input type="text" placeholder="Search...">
                </div>
                <div class="profile-button">
                    <img src="{{ asset('assets/img/sam.png') }}" alt="Profile Picture" class="profile-pic">
                    <span class="name" id="name"><strong>{{$employee->firstname}}</strong></span>
                    <div class="dropdown-menu">
                        <a href="{{ route('admin.profile') }}">Profile</a>
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
            <div class="document-details">
                <h2>Document Details</h2>
                <p><strong>ID:</strong> {{ $document->documents_id }}</p>
                <p><strong>Subject:</strong> {{ $document->subject }}</p>
                <p><strong>Description:</strong> {{ $document->description }}</p>
                <p><strong>Action:</strong> {{ $document->action }}</p>
                <p><strong>Date & Time Created:</strong> {{ $document->created_at }}</p>
                <p><strong>Deadline:</strong> {{ $document->deadline }}</p>
                <p><strong>Classification:</strong> {{ $document->classification }}</p>
                <p><strong>Subclassification:</strong> {{ $document->sub_classification }}</p>
            </div>
            <div class="actions">
                <a href="{{ route('documents.moveToPending', $document->id) }}" class="btn">Move to Pending</a>
                <a href="{{ route('documents.moveToArchive', $document->id) }}" class="btn">Move to Archive</a>
                <a href="{{ route('employee.home') }}" class="btn">Back to Documents</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/logout-darkmode.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
