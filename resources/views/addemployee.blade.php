<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
        <div class="card">
            <div class="card-body">
    <form action="/employeedatacreate" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="firstname" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstname" name="firstname">
          @error('firstname')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
            @error('lastname')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="company">Company</label>
            <select class="form-select" id="company" name="company">
              @error('company')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
              <option selected>Choose</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
            @error('phone')
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