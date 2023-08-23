@extends("main.layouts")

@section("content")
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Profile Update</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile Update</li>
            </ol>
            <form action="{{route('profile-update')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" value="{{$user->name}}" name="name" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            @if(!empty($errors->first('last_name')))
                            <p style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                            <label for="inputLastName">Last name</label>
                            <label for="inputFirstName">First name</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                        <input class="form-control" value="{{$user->last_name}}" name="last_name" id="inputLastName" type="text" placeholder="Enter your last name" />
                        @if(!empty($errors->first('last_name')))
                        <p style="color: red">{{ $errors->first('last_name') }}</p>
                        @endif
                        <label for="inputLastName">Last name</label>
                
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input class="form-control" value="{{$user->birth_date}}"  name="birth_date" id="inputBirthday" type="date" placeholder="Enter your Birth date" />
                            
                            @if(!empty($errors->first('last_name')))
                        <p style="color: red">{{ $errors->first('birth_date') }}</p>
                        @endif
                            <label for="inputBirthday"> Birth date </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </main>
@endsection
