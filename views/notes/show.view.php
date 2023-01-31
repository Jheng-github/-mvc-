<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      

          <?php
          echo "<P>".htmlspecialchars($note['body'])."</P>";
          ?>
          <!--用form表單來建立刪除-->
          <form class=mt-5 method="post">
          <input type="hidden" name='id' value="<?php echo $note['id']?>"></input>
          <button type='submit' name='delete' class="text-red-900">刪除筆記</button>
          &nbsp;&nbsp;
        <button type='submit' name='edit' class="text-red-900">編輯筆記</button> 
        <!-- <a href="views/notes/edit.view.php">test</a> -->
        
     <?php 
   // echo "<a href='/notes/show/".$note['id']' name='edit' class='text-red-900'>編輯筆記</a>"; 
     ?>
          </form>
          <BR>

          <p class='mb-6'> <a href="/notes" class="text-blue-500 hover:underline">go back...</a></p>

    </div>
  </main>
  <?php require base_path('views/partials/footer.php'); ?>