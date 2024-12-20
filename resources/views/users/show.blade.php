<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card-text {
      font-size: 1.2rem;
    }
    .btn-back {
      margin-top: 20px;
    }
  </style>
</head>
<body style="background: lightgray">

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <h3 class="card-title">User Details</h3>
            <p class="card-text"><strong>Name:</strong> {{ $user->nama_user }}</p>
            <p class="card-text"><strong>Role:</strong> {{ $user->peran }}</p>
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-back">Back to Users List</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

















<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card-text {
      font-size: 1.2rem;
    }
    .btn-back {
      margin-top: 20px;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }
  </style>
</head>
<body style="background: lightgray">

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body text-center">
            <img src="https://via.placeholder.com/150" alt="Profile Image" class="profile-img">
            <h3 class="card-title">User Details</h3>
            <p class="card-text"><strong>Name:</strong> {{ $user->nama_user }}</p>
            <p class="card-text"><strong>Role:</strong> {{ $user->peran }}</p>
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-back">Back to Users List</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->
