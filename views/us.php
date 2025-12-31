<?php
$posts = [
  [
    'title' => 'US news 1',
    'published' => '16.09.2025',
    'author' => 'Siim',
    'body' => 'Some US news 1'
  ],
  [
    'title' => 'US news 2',
    'published' => '16.12.2025',
    'author' => 'Igor',
    'body' => 'Some US news 2'
  ],
  [
    'title' => 'US news 3',
    'published' => '04.11.2025',
    'author' => 'Svetlana',
    'body' => 'Some US news 3'
  ],
  [
    'title' => 'US news 4',
    'published' => '21.01.2025',
    'author' => 'Danil',
    'body' => 'Some US news 4'
  ]
  ]
  ?>
  <?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
 <?php include __DIR__ . '/partials/footer.php'; ?>

