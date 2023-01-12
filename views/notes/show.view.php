<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <p class='mb-6'> <a href="/notes" class="text-blue-500 hover:underline">go back...</a></p>

          <?php
          echo "<P>".htmlspecialchars($note['body'])."</P>";
          ?>
          
        <!-- echo "<a href=/note?id=".$note['id']." class='text-blue-500 hover:underline'>"
        //."<li>".$note['body']."</li>"."</a>";   -->


    </div>
  </main>
  <?php require 'views/partials/footer.php'; ?>