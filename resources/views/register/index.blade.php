<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-sm-6 col-sm-5">
                    <div class="card bg-light text-white">
                        <div class="card-body p-5 text-center shadow">
                            <div class="row align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="mb-4">
                                            <a href="/">
                                                <img src="https://i.ibb.co/9Y48kYZ/Group-1.png" width="" alt="">
                                            </a>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-md-5 mt-md-4">
                                <!-- <label class="text-black form-label" for="typeEmailX">Email</label> -->
                                <h2 class="text-black fw-bold mb-4 text-uppercase">Register</h2>
                                <form action="/register" method="post">
                                @csrf
                                <div class="mb-4 text-start">
                                    <label class="text-black fw-bold form-label fs-4">Name</label>          
                                    <input type="text" name="name" id="name" placeholder="Input your Name..."
                                        class="form-control form-control-lg @error('name') is-invalid @enderror" required value="{{ old('name') }}" >
                                        @error ('name')
                                        <div class="invalid-feedback">
                                            Tolong masukan nama terlebih dahulu
                                        </div>
                                        @enderror

                                </div>
                                <div class="mb-4 text-start">
                                    <label class="text-black fw-bold form-label fs-4">Username</label>
                                    <input type="text" name="username" id="username" placeholder="Input Username..."
                                        class="form-control form-control-lg @error('username') is-invalid @enderror" required value="{{ old('username') }}" >
                                        @error ('username')
                                        <div class="invalid-feedback">
                                            Masukan username yang sesuai atau username yang anda masukan sudah terpakai
                                        </div>
                                        @enderror
                                </div>
                                <div class="mb-4 text-start">
                                    
                                    <label class="text-black fw-bold form-label fs-4" for="typePasswordX">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Input your password..."
                                        class="form-control form-control-lg @error('password') is-invalid @enderror" required/>
                                            {{-- <span class="input-group-text" id="togglePassword">
                                                <img src="https://img.icons8.com/office/16/null/invisible.png"  class="bi-eye"/>
                                          </span> --}}
                                          @error ('password')
                                          <div class="invalid-feedback">
                                              Tolong masukan password terlebih dahulu minimal 8 karakter
                                          </div>
                                          @enderror
                                        
                                </div>
                                {{-- <div class="mb-4">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror" required >
                                        @error ('password')
                                        <div class="invalid-feedback">
                                            Tolong masukan passowrd terlebih dahulu minimal 8 karakter
                                        </div>
                                        @enderror
                                </div> --}}
                                <div class="mb-4 text-start">
                                    
                                    <label class="text-black fw-bold form-label fs-4" for="typePasswordX">Confirm Password</label>
                                    <input type="password" id="password" name="password" placeholder="Confirm your password..."
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"  required/>
                                            {{-- <span class="input-group-text" id="togglePassword1">
                                                <img src="https://img.icons8.com/office/16/null/invisible.png"  class="bi-eye1"/>
                                          </span> --}}
                                    {{-- <input type="password" id="typePasswordX" placeholder="Repeat Password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror" required > --}}
                                        @error ('password')
                                        <div class="invalid-feedback">
                                            Tolong masukan password yang sama
                                        </div>
                                        @enderror
                               
                                </div>
                                <button class="btn bg-primary text-white btn-lg px-5 fw-bold" type="submit">Register</button>


                            </div>
                        </form>
                            <div>
                                <p class="text-black mb-0">Already have an account? <a href="/login"
                                        class="text-black-50 fw-bold">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
    const togglePassword = document
    .querySelector('#togglePassword'); --}}
    {{-- // .querySelector('#togglePassword1');

    // const password = document.querySelector('#password');

    // togglePassword.addEventListener('click', () => {

    // Toggle the type attribute using
    // getAttribure() method
    // const type = password
    //     .getAttribute('type') === 'password' ?
    //     'text' : 'password';
          
    // password.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    // this.classList.toggle('bi-eye');
    // this.classList.toggle('bi-eye1');
// }); --}}

{{-- </script> --}}

{{-- <script>
const togglePassword = document
    .querySelector('#togglePassword1');

    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {

    // Toggle the type attribute using
    // getAttribure() method
    const type = password
        .getAttribute('type') === 'password' ?
        'text' : 'password';
          
    password.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    this.classList.toggle('bi-eye1');
</script> --}}
</body>
<footer>
    <div class="text-center p-4 text-light" style="background-color: #2B2B78">
        <p>2022 PT Trisakti Pilar Persada</p>
    </div>
</footer>

</html>