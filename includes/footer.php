</main>
</div>
<div class="modal overlay">
  <div class="container modal__body" id="login-modal">
    <div class="modal-close">
      <button class="modal-close__btn chest-icon"></button>
    </div>
    <section class="wrapper">
      <h2 class="tweet-form__title">Введите логин и пароль</h2>
      <?php if ($error) : ?>
        <div class="tweet-form__error"><?= $error ?></div>
      <?php endif; ?>
      <div class="tweet-form__subtitle">Если у вас нет логина, пройдите <a href="<?= get_url("register.php") ?>">регистрацию</a></div>
      <form class="tweet-form" method="post" action="<?= get_url('includes/sign_in.php') ?>">
        <div class="tweet-form__wrapper_inputs">
          <input type="text" class="tweet-form__input" name="login" placeholder="Логин" required>
          <input type="password" class="tweet-form__input" name="pass" placeholder="Пароль" required>
        </div>
        <div class="tweet-form__btns_center">
          <button class="tweet-form__btn_center" type="submit">Войти</button>
        </div>
      </form>
    </section>
  </div>
</div>
<script src="<?= get_url("js/scripts.js") ?>"></script>
<?php if ($error) : ?>
  <script>
    openModal()
  </script>
<?php endif; ?>
</body>

</html>