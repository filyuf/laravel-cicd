@extends('../layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-4">Students List</h1>
                    <a href="{{ route('index') }}" class="btn btn-primary float-right">Back</a>
                </div>

                <div class="card-body">
                <form action="{{ route('update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                        <div class="row">
                            <div class="form-group mb-3">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $student -> name }}" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-group">
                                    <label for="class">Class</label>
                                    <input type="text" class="form-control" id="class" name="class" value="{{ $student -> class }}" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" value="{{ $student -> age }}" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Student</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection