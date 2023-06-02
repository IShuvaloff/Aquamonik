
<div class="form">
  <!-- ! заглушка, чтобы валидатор не кричал, т.к. отправлять форму будем с помощью JS -->
  <form action="#" id="form" class="form__body">
    <!-- <h1 class="form__title">Отправка данных на почту</h1> -->

    <!-- ? текстовое поле ИМЯ -->
    <div class="form__item">
      <input type="text" id="formName" name="name" class="form__input _req" placeholder="Ваше имя *" title="Обязательно к заполнению"> <!-- required -->
    </div>

    <!-- ? текстовое поле EMAIL -->
    <div class="form__item">
      <input type="email" id="formEmail" name="email" class="form__input _req _email" placeholder="Ваш E-mail *" title="Обязательно к заполнению" > <!-- required -->
    </div>

    <!-- ? текстовое поле телефон -->
    <div class="form__item">
      <input type="phone" id="formPhone" name="phone" class="form__input _req _phone" placeholder="Ваш телефон *" title="Обязательно к заполнению" > <!-- required -->
    </div>

    <!-- ? мемо СООБЩЕНИЯ-->
    <div class="form__item">
      <textarea name="message" id="formMessage" class="form__input" placeholder="Текст сообщения"></textarea>
    </div>

    <!-- ? кнопка ОТПРАВИТЬ -->
    <button type="submit" class="form__button">Отправить</button> 
  </form>
</div>