@extends('layout.main')
@section('content')
@section('sidebar')
@parent
<nav class="main-header navbar navbar-expand navbar-blue shadow-sm navbar-light" style="background-color: #2B2B78">
    <!-- Left navbar links -->
    <ul class="navbar-nav font-weight-bold ">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/dashboard" class="nav-link text-white">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin/activity" class="nav-link text-white">Activity</a>
        </li>
    </ul>
</nav>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        @php $users = DB::table('users')->get(); @endphp
                        <div class="container">
                            {{-- <div class="row "> --}}
                            <table class="table-responsive-sm table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Last Seen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $user->id))
                                                <span class="text-success">Online</span>
                                            @else
                                                <span class="text-secondary">Offline</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
    <br><br><br><br><br><br><br><br><br><br><br>
@stop
@stop