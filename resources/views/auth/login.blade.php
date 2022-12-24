<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
        <style type="text/css">
           /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://img.freepik.com/premium-vector/cyber-security-data-protection-concept-virtual-screen-padlock-with-keyhole-icon-closeup-smartphone-wireframe-hands_127544-1233.jpg?w=1060');
  background-size: cover;
  background-position: center center;
}
        </style>
    </head>

    <body>
    <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Login page!</h3>
                            <p class="text-muted mb-4">Login Uts Backend.</p>
                            <span>
                        Admin login <br>
                        Nama Admin   : Admin <br>
                        Email        : admin@admin.com <br>
                        Password     : adminbackend
                    </span>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-exclamation-triangle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" required autocomplete="email" value="{{old('email')}}">
                        </div>
                         <div class="form-group mb-5">
                            <label for="password">Password</label>
                            <input type="password"
                                class="form-control @error('email') is-invalid @enderror"
                                id="password" name="password" required autocomplete="new-password">
                        </div>
                                
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Login</button>
                                <div class="text-center text-lg-start mt-4 pt-2">
            
              
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register33"
                class="link-danger">Register</a></p>
          </div>
                            
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>


</html>