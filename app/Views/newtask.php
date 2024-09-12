<section class="mt-5">
          <div class="container">
            <h1>ADD NEW TASK</h1>
            <div class="card">
                <form method="POST" action="/newtask">
                <div class="card-body">
                  <h5 class="card-title">Task details</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Please Enter The Details Of The Tasks You Want To Add</h6>
                  <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="title">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" name="description">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Due Date</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPassword3" name="duedate">
                        </div>
                      </div>
                   
                    <button type="submit" class="btn btn-primary">Add Task</button>
                  </form>
                </div>
                </form>
              </div>
          </div>

    </section>