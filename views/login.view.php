<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <form method="post" >
            <label for="username">登入帳號:</label>
            <input type="text" id="username" name="uid" placeholder="請輸入帳號" required>
            <br>
            <label  for="password">登入密碼:</label>
            <input  class='mt-6' type="password" id="password" name="password" placeholder="請輸入密碼" required>

            <br><br>
           <!-- <input class='mt-6' type="submit" value="登入"> -->
            <button type="submit" name="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">登入</button>

        </form>
    </div>
</main>
<?php require 'partials/footer.php'; ?>