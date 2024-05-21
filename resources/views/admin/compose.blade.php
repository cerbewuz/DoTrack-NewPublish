<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Admin - Compose</title>
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
                        <a href="{{ route('admin.compose') }}">
                            <div class="list">
                                <span class="material-symbols-outlined">
                                    edit_document
                                </span>
                                <span>Compose Mail</span>
                            </div>
                        </a>
                    </div>
                    <div class="link-Container">
                        <a href="{{ route('admin.home') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    home
                                </span>
                                <span>Home</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.incoming') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    move_to_inbox
                                </span>
                                <span>Incoming</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.pending') }}">
                            <div class="list2">
                                <span class="material-symbols-outlined">
                                    pending_actions
                                </span><span>Pending</span>
                            </div>
                        </a>
                        <a href="{{ route('admin.received') }}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    check_circle
                                </span><span>Received</span></div>
                        </a>
                        <a href="{{ route('admin.outgoing') }}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    outgoing_mail
                                </span> <span>Outgoing</span></div>
                        </a>
                        <a href="{{ route('admin.archive') }}">
                            <div class="list2"><span class="material-symbols-outlined">
                                    archive
                                </span><span>Archive</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modalwrapper">
            <div class="card-white">
                <form method="POST" action="{{ route('admin.compose') }}" class="card-white-flex">
                    @csrf
                    <div class="card-heading">
                        <div class="heading-compose">
                            <img src="../assets/img/logo.png" alt="">
                            <h4>DoTracker Documents</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-flex-body">
                            <div class="item">
                                <div class="div-item-tofrom-wrapper">
                                    <div class="div-send">
                                        <div class="from">
                                            <label for="from">From:</label>
                                            <input type="text" name="sender" value="{{ Auth::user()->email }}" disabled>
                                            <input type="hidden" name="sender_user_id" value="{{ Auth::user()->id }}">
                                        </div>

                                        <div class="to">
                                            <label for="to">To:</label>
                                            <select name="receiver_user_id" id="receiver_user_id">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="div-item-subdes-wrapper">
                                    <div class="div-subdes">
                                        <label for="subject">Subject:</label>
                                        <input type="text" name="subject">
                                    </div>
                                    <div class="div-subdes">
                                        <label for="description">Description:</label>
                                        <input type="text" name="description">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="div-item-categ-wrapper">
                                    <div class="div-item-categ-wrapper-1">
                                        <div class="div-file-categ">
                                            <div class="div-file">
                                                <label for="prioritization">Prioritization:</label>
                                                <select name="prioritization" id="prioritization">
                                                    <option disabled selected>Select Type</option>
                                                    @foreach ($prioritizations as $prioritization)
                                                        <option value="{{ $prioritization->id }}">{{ $prioritization->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="div-file">
                                                <label for="classification">Classification:</label>
                                                <select name="classification" id="classification">
                                                    <option disabled selected>Select Type</option>
                                                    @foreach ($classifications as $classification)
                                                        <option value="{{ $classification->id }}">{{ $classification->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="div-file-categ-1">
                                        <div class="div-file-1">
                                            <label for="sub_classification">Sub-Classification:</label>
                                            <select name="sub_classification" id="sub_classification">
                                                <option disabled selected>Select Type</option>
                                                @foreach ($subclassifications as $subclassification)
                                                    <option value="{{ $subclassification->id }}">{{ $subclassification->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="div-item-4-wrapper">
                                    <div class="div-deadline-wrapper">
                                        <div class="div-deadline">
                                            <label for="action">Action:</label>
                                            <select name="action" id="action">
                                                <option disabled selected>Select Type</option>
                                                @foreach ($actions as $action)
                                                    <option value="{{ $action->id }}">{{ $action->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="div-deadline">
                                            <label for="deadline">Deadline:</label>
                                            <input type="datetime-local" name="deadline">
                                        </div>
                                    </div>

                                    <div class="div-file-wrapper">
                                        <div class="div-files">
                                            <input type="file" name="file" accept=".pdf, .doc, .docx, .xls, .xlsx, .csv">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="div-footer">
                            <button type="submit" class="button">Submit Documents</button>
                            <button type="button" class="button-1 hi">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="top-bar">
            <div class="heading-content">
                <div class="heading-content-searchbar">
                    <input type="text" placeholder="   Search...">
                </div>

                <div class="profile-button">
                    <img src="../assets/img/sam.png" alt="Profile Picture" class="profile-pic">
                    <span class="name" id="name"><strong>{{ $admin_name }}</strong></span>
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
                </div>
        <div class="content">

        </div>

        <script src="../js/logout-darkmode.js"></script>
        <script src="../js/script.js"></script>
        </body>
        </html>
