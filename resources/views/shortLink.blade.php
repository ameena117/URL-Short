<!DOCTYPE html>
<html>
<head>
<title>Converter Links</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
<style>
body {
  background-color: rgb(139 92 92 / 30%);
}
.container{
  border: 2px solid whitesmoke;
  border-radius: 30px;
}
</style>
<div class="container bg-secondary mt-5 col-8">
<h1 class="text-center">Convert To Short Links</h1>
    <div class="card m-3">
      <div class="card-header">
        <form method="POST" action="{{ route('mylink') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="long" class="form-control" placeholder="Enter any Link">
              <div class="input-group-append">
                <button class="btn btn-info" type="submit">Add Link</button>
              </div>
            </div>
        </form>   
        @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
        @endif
      </div>
      <div class="card-body col-12">  
            <table class="table table-bordered mb-2">
                <thead class="table-striped bg-secondary">
                    <tr>
                        <th>#ID</th>
                        <th>Long Link</th>
                        <th>Short Link </th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody class="table table-striped">

                    @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->long }}</td>
                            <td><a href="{{ route('shortest', $row->short) }}" target="_blank">{{ route('shortest', $row->short) }}</a></td>
                            <td><a class="btn btn-outline-info" type="submit">Edit</a> <a class="btn btn-outline-danger" type="submit" href = 'delete/{{ $row->id }}'>Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>
</div>
</body>
</html>