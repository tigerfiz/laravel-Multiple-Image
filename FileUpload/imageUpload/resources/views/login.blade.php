<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
        <title>Login</title>
    </head>
    <body>
        <span>{{session()->get('name')}}</span>
        <a href="{{'/logout'}}"> logout</a>
        <a href="{{'/addimage'}}"> add image</a>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div
                    class="row d-flex align-items-center justify-content-center h-100"
                >
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid"
                            alt="Phone image"
                        />
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="{{ '/login' }}" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input
                                    type="email"
                                    name="email"
                                    id="form1Example13"
                                    class="form-control form-control-lg"
                                />
                                <label class="form-label" for="form1Example13"
                                    >Email address</label
                                >
                                <br />
                                <span style="color: red">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input
                                    type="password"
                                    id="form1Example23"
                                    class="form-control form-control-lg"
                                    name="password"
                                />
                                <label class="form-label" for="form1Example23"
                                    >Password</label
                                >
                                <br />
                                <span style="color: red">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div
                                class="d-flex justify-content-around align-items-center mb-4"
                            >
                                <!-- Checkbox -->

                                <a href="{{ '/registar' }}"
                                    >create a new accout</a
                                >
                            </div>

                            <!-- Submit button -->
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg btn-block"
                            >
                                Sign in
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    ></script>
</html>
