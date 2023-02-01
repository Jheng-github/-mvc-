<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
        <form method="POST" >
              <label for="username">註冊帳號:</label>
              <input type="text" id="username" name="uid" placeholder="請輸入帳號" required>
              <?php if(isset($error['uid'])) echo "<p class='text-red-600 text-m mt-2'>".$error['uid']."</p>";  ?>
            <br>
            <label  for="password">註冊密碼:</label>
            <input  class='mt-6' type="password" id="password" name="password" placeholder="請輸入密碼" required>
            <br>
            <label  for="passwordrepeat">確認密碼:</label>
            <input  class='mt-6' type="password" id="passwordrepeat" name="passwordrepeat" placeholder="請輸入密碼" required>
            <?php if(isset($error['password'])) echo "<p class='text-red-600 text-m mt-2'>".$error['password']."</p>";  ?>
            <br>
            <label  for="email">填入信箱:</label>
            <input  class='mt-6' type="email" id="email" name="email" placeholder="E-mail" required>

            <br><br>
           <!-- <input class='mt-6' type="submit" value="登入"> -->
            <button type="submit" name="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">註冊</button>

        </form>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php'); ?>