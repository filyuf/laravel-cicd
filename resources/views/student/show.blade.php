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
               <table class="table">
              <tbody>
                <tr>
                    <th scope="col">Name</th>
                    <td>{{ $student -> name }}</td>
                </tr>
                <tr>
                    <th scope="col">Class</th>
                    <td>{{ $student -> class }}</td>
                </tr>
                <tr>
                    <th scope="col">Age</th>
                    <td>{{ $student -> age }}</td>
                </tr>
              </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection