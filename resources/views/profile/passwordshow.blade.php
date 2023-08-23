@extends("main.layouts")

@section("content")
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Profile</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile</li>
            </ol>
            <div class="card mt-2">
            <div class="card-body">
            <ul>
                <li>First name: <b><i>{{$user->email}}</i></b></li>
                <li>Last name: <b><i>{{$user->new_password}}</i></b></li>
                <li>Birth date<b><i>{{$user->password_confirmation}}</i></b></li>
                
            </ul>
            <div class="form-group">
                <a class="btn btn-success" href="{{route('new-password')}}">Update</a>
            </div>
            </div>
            </div>
        </div>
    </main>
@endsection