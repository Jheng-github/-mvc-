<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?> 

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <ul>
      
      <?php
       //echo "<a href=/>".'ffff'."</a>"; 
      foreach ($notes as $note) { //讀取列表,利用note.php讀取利便出來,做連結接著點入之後會導到note.php各個文件裡面
        //dd($note);//從資料庫取得文章id
        //dd($_SERVER);

        echo "<a href=/note?id=" . $note['id'] ." class='text-blue-500 hover:underline'>"
          . "<li>" . htmlspecialchars($note['body']) . "</li>" . "</a>";
        echo "<p style=float:right;>".$note['time']."</p>";
        echo "<br>";
      }
      ?>
    </ul>
    <p class="mt-6">
      <a href="/notes/create" class="text-blue-500 hover:underline">來留言</a>

    </p>
  </div>
</main>
<?php require base_path('views/partials/footer.php'); ?>
