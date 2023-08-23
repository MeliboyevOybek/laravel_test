@extends("main.layouts")

@section("content")
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">New password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">New password</li>
            </ol>
            <form action="{{route('profile-update')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="email" id="inputEmail" type="text" placeholder="Enter your first email" />
                            <label for="inputEmail">Email</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                        <input class="form-control" value="{{$user->new_password}}" name="new_password" id="inputNewPassword" type="text" placeholder="Enter your new password" />
                        @if(!empty($errors->first('New_password')))
                            <p style="color: red">{{ $errors->first('New_password') }}</p>
                            @endi
                        <label for="inputNewPassword">New password</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input class="form-control" value="{{$user->password_confirmation}}" name="password_confirmation" id="inputpassword_confirmation" type="date" placeholder="Enter your Password Confirmation" />
                            
                            @if(!empty($errors->first('password_confirmation')))
                            <p style="color: red">{{ $errors->first('password_confirmation') }}</p>
                            @endi
                            <label for="inputPassword_confirmation"> password confirmation </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Edit Password</button>
        </form>
    </main>
@endsection