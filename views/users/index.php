<?php include __DIR__ . '/../partials/header.php'; ?>


    <div class="createContainer">
        <a type="button" class="btn btn-success" href="users/create">Create</a>
    </div>
    <table class=table table-striped table-hover>
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>    
        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->email?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-danger" href="users/delete?id=<?=$user->id?>">Delete</a>
                </div>


            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
