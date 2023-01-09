<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
        <?php foreach($notes as $note){
            echo '<a href="/notes/unique-slug-for-the-note" class="text-blue-500 hover:underline">';
            echo "<LI>".$note['body']."</LI>"."</a>"; 
        }
        ?>


    </div>
  </main>
  <?php require 'partials/footer.php'; ?>