@section('title', 'Users')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @include('layouts.partials.sidebar')
        
        <h1 class="page-header"> 
        List of Users
        <a href="{{ route('user.index') }}" class="btn btn-info">New User</a>
        </h1>
        @include('layouts.partials.alerts')
        <table class="table table-striped table-bordered">
            <thead>
                <tr> 
                 <td>ID</td>
                 <td>Name</td>
                 <td>Role</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr> 
                <td>{{ $user->id }}</td> 
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        </div>