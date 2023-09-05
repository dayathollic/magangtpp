<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="gradient-custom">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-sm-5 col-sm-5">
                    <div class="card bg-light text-white shadow">
                        <div class="card-body p-3 text-center">
                            <div class="row ">
                                <div class="container ">
                                    <div class="row">
                                        <div class="mb-4">
                                            <a href="/">
                                            <img src="https://i.ibb.co/9Y48kYZ/Group-1.png" width="" alt="" class="align-items-center d-inline"  >
                                            </a>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                            <div class="mb-md-4 mt-md-4">
                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                </div>
                                @endif
                            <!-- <img src="https://i.ibb.co/9Y48kYZ/Group-1.png" width="" alt=""> -->
                                <h2 class="text-black fw-bold mb-2 text-uppercase">Welcome!</h2>
                                <p class="text-black-50 mb-5">Please enter your login and password!</p>
                               
                                <!-- <label class="text-black form-label" for="typeEmailX">Email</label> -->
                                <form method="POST" action="/login">
                                    @csrf
                                <div class="mb-4 text-start">
                                    <label class="text-black fw-bold form-label fs-4" for="typeEmailX">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Input your Username..."
                                        class="form-control form-control-lg" @error('username') is-invalid @enderror value="{{ old('username') }}" autofocus required />
                                    @error ('username')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                               
                                <div class="mb-4 text-start ">
                                    <label class="text-black fw-bold form-label fs-4" for="typePasswordX">Password</label>
                                    <div class="input-group">
                                    <input type="password" id="password" name="password" placeholder="Input your password..."
                                        class="form-control form-control-lg" required/>
                                            <span class="input-group-text" id="togglePassword">
                                                <img src="https://img.icons8.com/office/16/null/invisible.png"  class="bi-eye"/>
                                          </span>
                                        </div>
                                </div>

                                <button class="btn bg-primary text-white btn-lg px-5" type="submit">Login</button>


                            </div>

                            <div>
                                <p class="text-black mb-0">Don't have an account? <a href="/register"
                                        class="text-black-50 fw-bold">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
<script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>
</body>
<footer>
    <div class="text-center p-4 text-light" style="background-color: #2B2B78">
        <p>2022 PT Trisakti Pilar Persada</p>
    </div>
</footer>


</html>