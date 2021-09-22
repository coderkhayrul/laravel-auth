<div class="col-md-2 sidebar_part">
    <div class="user_part">
        <img src="{{ asset('backend') }}/images/avatar.png" alt="avatar">
        <h4>Khayrul Islam Shanto</h4>
        <p><i class="fa fa-circle"></i> Online</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="{{ route('table.view') }}"><i class="fa fa-user-circle"></i> User</a></li>
            <li><a href="#"><i class="fa fa-bandcamp"></i> Banner</a></li>
            {{-- <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="fa fa-power-off"></i> Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> --}}

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"> <i class="fa fa-power-off"></i> Logout</button>
                </form>
            </li>

        </ul>
    </div>
</div>
