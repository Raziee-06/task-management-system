<header class="bg-primary text-white text-center py-5 bg-gradient">
  <div class="container">

    <form method="post" action="<?php echo base_url(); ?>login">
      <h1>Log In</h1>
      <p class="lead">It's quick and easy</p>
  </div>
</header>

<section class="mt-5">
  <div class="container form-control fw-bold">
    <form action="/login" method="POST">
      <div class="mt-3">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your username" name="username">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Please enter your password">
        </div>
        <button type="submit" class="btn-primary btn">Login</button>
      </div>
    </form>
  </div>

</section>