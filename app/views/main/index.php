<h3 class="m-h">Переводчик</h3>
<div class="form-group">
 <form action="" method="post">
     <label class="m-width" for="russian">Введите слово:</label>
     <textarea class="form-control m-width" rows="4" id="russian" name="word"><?= $word;?></textarea>

     <label class="m-width" for="eng">Перевод:</label>
     <textarea class="form-control m-width" rows="4" id="trans" disabled="disabled"><?= $result;?></textarea>

     <label class="m-width" for="sel1">Выбирите направление перевода:</label>
     <select class="form-control m-width" id="sel1" name="options">
         <option>Англо-Русский</option>
         <option>Русско-Англиский</option>
     </select>

     <button type="submit" class="btn btn-success m-top">Перевести</button>
 </form>
</div>
<div class="my-class">
    <a href="auth/login">Авторизация</a>
</div>