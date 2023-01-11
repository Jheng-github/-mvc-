
<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
        <form method=POST>
            <label for="body">描述</label>
        <div>
            <textarea id='body' name='body' ></textarea>
        </div>
        <p>

        <button type='submit'>Create</button>

        </p>


        </form>

        </div>
  </main>
  <?php require 'partials/footer.php'; ?>