@extends('layouts.main')

@section('container')

  <div class="row justify-content-center">
    <div class="col-md-5 mt-5">
      
      <main class="form-signin">
        <form>
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            <label for="email">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <label for="password">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <small class="d-block text-center mt-3">Not registered?<a href="/register">Register Now</a></small>
        </form>
      </main>

    </div>
  </div>
  
@endsection