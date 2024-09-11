<header class="bg-primary text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Sign Up</h1>
            <p clas="lead">It's quick and easy</p>
        </div>
    </header>

    <section class="mt-5">
          <div class="container form-control fw-bold">Register
            <div class="mt-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="email" value="<?= $nama ?>" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your full name">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your username"value="<?= $username ?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your email"value="<?= $email ?>">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your password"value="<?= $password ?>">
                  </div>
                  <button type="button" class="btn-primary btn">Submit</button>
            </div>
          </div>

    </section>