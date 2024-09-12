<header class="bg-primary text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Sign Up</h1>
            <p clas="lead">It's quick and easy</p>
        </div>
    </header>

    <section class="mt-5">

          <div class="container form-control fw-bold">
            <?php if (session()->getFlashdata('error')) {?>
                      <div class="alert alert-danger" roles="alert">
                        <?php echo session()->getFlashdata('error');?>
                    </div>
                    <?php } ?>

            <h3>Register</h3>
            <div class="mt-3">
                <div class="mb-3">
                  <form method="post" action="<?php echo base_url(); ?>register">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Please enter your full name">
                  </div>



                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Please enter your username">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Please enter your email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please enter your password">
                  </div>
                  <button type="submit" class="btn-primary btn">Submit</button>
                  </form>
            </div>
          </div>

    </section>

  <?php if (session()->getFlashdata('error')) {?>
  <script>Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Something went wrong!",
    footer: '<a href="#">Why do I have this issue?</a>'
});</script>
<?php } ?>
