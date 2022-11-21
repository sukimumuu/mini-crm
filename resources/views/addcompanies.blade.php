<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Companies Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
        <div class="card">
            <div class="card-body">
    <form action="/companiesdatacreate" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Companies Name</label>
          <input type="text" class="form-control" id="name" name="name">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Companies Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="logo" class="form-label">Companies Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
          </div>
          <div class="mb-3">
            <label for="website" class="form-label">Companies Website</label>
            <input type="text" class="form-control" id="website" name="website">
            @error('website')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
   </div>
</div>
</div>
    </div>  
</body>
</html>