<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->

        <?php foreach($notes as $note){ //讀取列表,利用note.php讀取利便出來,做連結接著點入之後會導到note.php各個文件裡面
        //var_dump($note);
            echo "<a href=/note?id=".$note['id']." class='text-blue-500 hover:underline'>"
            ."<li>".$note['body']."</li>"."</a>";  
        }
        ?>


    </div>
  </main>
  <?php require 'partials/footer.php'; ?>