<header class="text-black text-center py-5 bg-gradient">
    <div class="container">
        <h1>Welcome To Task Management System</h1>
        <p clas="lead">Manage Your Tasks Effeciently And Effectively </p>
        <a type="button" class="btn btn-primary" href="/newtask">Add New Task</a>
    </div>
</header>



<section class="mt-5">
    <div class="container">Your Task
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task["title"] ?></td>
                        <td><?= $task["description"] ?></td>
                        <td><?= $task["due_date"] ?></td>
                        <td><?= $task["status"] ?></td>
                        <td>
                            <a type="button" class="btn btn-danger" href="/delete/<?= $task["id"] ?>">Delete</a>
                            <a type="button" class="btn btn-warning" href="/update/<?= $task["id"] ?>">Update</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</section>