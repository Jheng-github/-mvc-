<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <p class='mb-6'> <a href="/notes" class="text-blue-500 hover:underline">go back...</a></p>

          <?php
          echo "<P>".htmlspecialchars($note['body'])."</P>";
          ?>
          <!--用form表單來建立刪除-->
          <form class=mt-5 method=POST>
          <button class="text-red-900">刪除此紀錄</button>

          </form>


        <!-- echo "<a href=/note?id=".$note['id']." class='text-blue-500 hover:underline'>"
        //."<li>".$note['body']."</li>"."</a>";   -->


    </div>
  </main>
  <?php require base_path('views/partials/footer.php'); ?>