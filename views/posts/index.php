<?php include __DIR__ . '/../partials/header.php'; ?>
    <main class="container">
        <a href="/posts/create" class="btn btn-primary">New post</a>
      <table class=table table-striped table-hover>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php foreach ($posts as $post): ?>    
        <tr>
            <td><?=$post->id?></td>
            <td><?=$post->title?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-info" href="posts/view?id=<?=$post->id?>">View</a>
                    <a type="button" class="btn btn-warning" href="posts/edit?id=<?=$post->id?>">Edit</a>
                    <a type="button" class="btn btn-danger" href="posts/delete?id=<?=$post->id?>">Delete</a>
                </div>


            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
