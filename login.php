<div class="px-5 py-5 p-lg-0 h-screen bg-surface-secondary d-flex flex-column justify-content-center">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-12">
                        <h3 class="display-5">👋</h3>
                        <h1 class="ls-tight font-bolder mt-6">Welcome back!</h1>
                        <p class="mt-2">Let's build someting great</p>
                        <p class="mt-2 text-danger">
                            <?php

                            if (isset($_POST['signit']) && !isset($_SESSION['logit'])) {
                                echo "Wrong username or password!";
                            }

                            ?>
                        </p>
                    </div>
                    <form method="post">
                        <div class="mb-5"><label class="form-label" for="email">User name</label>
                            <input type="text" class="form-control" id="email" name="username" placeholder="Username or email address">
                        </div>
                        <div class="mb-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="mb-2"><a href="./basic-recover.html" class="text-sm text-muted text-primary-hover text-underline">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="pascode" id="password" placeholder="Password" autocomplete="current-password">
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="check_example" id="check-remind-me"> <label class="form-check-label" for="check-remind-me">Keep me logged in</label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" name="signit" class="btn btn-primary w-full">Sign in</button>
                        </div>
                    </form>
                    <div class="py-5 text-center"><span class="text-xs text-uppercase font-semibold">or</span>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-neutral w-full">
                                <span class="icon icon-sm pe-2"><img alt="..." src="./assets/img/social/github.svg"></span><span>Github</span></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-neutral w-full"><span class="icon icon-sm pe-2"><img alt="..." src="./assets/img/social/google.svg"></span><span>Google</span></a>
                        </div>
                    </div>
                    <div class="my-6"><small>Don't have an account?</small> <a href="./register.php" class="text-warning text-sm font-semibold">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>
</div>