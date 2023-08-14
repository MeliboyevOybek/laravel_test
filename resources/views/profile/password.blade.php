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
                            <input class="form-control" name="email" id="inputEmail" type="text" placeholder="Enter your first email" />
                            <label for="inputFirstName">First name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                        <input class="form-control" name="last_name" id="inputLastName" type="text" placeholder="Enter your last name" />
                        <label for="inputLastName">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input class="form-control" name="birth_date" id="inputBirthday" type="date" placeholder="Enter your Birth date" />
                            <label for="inputBirthday"> Birth date </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </main>
@endsection