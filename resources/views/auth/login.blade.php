<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<body> 
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign In</h3>
            <form action="/login">
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email"/>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
              </div>
              <div class="d-grid mx-auto">
                <button class="btn btn-primary " type="submit">Login</button>
              </div>
            </form>            
            <hr class="my-4">
            <div class="d-grid align-self-end">
              <h6>Belum punya Akun klik <a href="/register">Disini</a> </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>