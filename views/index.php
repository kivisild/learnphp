<?php
$posts = [
  [
    'title' => 'World news 1',
    'published' => '16.09.2025',
    'author' => 'Siim',
    'body' => 'Some world news 1'
  ],
  [
    'title' => 'World news 2',
    'published' => '16.12.2025',
    'author' => 'Igor',
    'body' => 'Some world news 2'
  ],
  [
    'title' => 'World news 3',
    'published' => '04.11.2025',
    'author' => 'Svetlana',
    'body' => 'Some world news 3'
  ],
  [
    'title' => 'World news 4',
    'published' => '21.01.2025',
    'author' => 'Danil',
    'body' => 'Some world news 4'
  ]
  ]
  ?>


  <?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>
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

