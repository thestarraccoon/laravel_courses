<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
                <i class=""></i>
                <i class="nav-icon fas fa-solid fa-bars"></i>
                <p>
                    Posts
                    @if(isset($posts))
                        <span class="badge badge-info right"> {{ $posts->total() }}</span>
                    @endif
                </p>
            </a>
        </li>
    </ul>
</nav>
