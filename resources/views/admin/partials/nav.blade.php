<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-user"></i> <span> Dashboard</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.student') }}"><i class="fas fa-user-graduate"></i> <span>
                            Students</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.teacher') }}"><i class="fas fa-chalkboard-teacher"></i> <span>
                            Teachers</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.subject') }}"><i class="fas fa-table"></i> <span>Subject</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.exam') }}"><i class="fas fa-table"></i> <span>Exam
                            Schedule</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.routine') }}"><i class="fas fa-table"></i> <span>Class
                            Schedule</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.result') }}"><i class="fas fa-clipboard-list"></i>
                        <span>Result</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.user.list') }}"><i class="fas fa-user"></i>
                        <span>All User</span></a>
                </li>
                <li class="">
                    <a href="{{ route('admin.class.add') }}"><i class="fas fa-user"></i>
                        <span>Add class</span></a>
                </li>
                <li class="">
                    <a href="{{ route('class.under.students') }}"><i class="fas fa-user-graduate"></i>
                        <span> Student Under Class</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
