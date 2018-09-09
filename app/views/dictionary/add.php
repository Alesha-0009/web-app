<h3 class="m-h">Добавить запись в словарь</h3>
<div class="form-group">
        <form action="/dictionary/add" method="post">
            <label class="m-width">Введите слово:</label>
            <input type="text" class="form-control m-width" name="word"/>

            <label class="m-width">Введите перевод:</label>
            <input type="text" class="form-control m-width" name="trans"/>

            <label class="m-width" for="sel1">Выбирите направление перевода:</label>
            <select class="form-control m-width" id="sel1" name="options">
                <option>Англо-Русский</option>
                <option>Русско-Англиский</option>
            </select>

            <button type="submit" class="btn btn-success m-top">Добавить</button>
        </form>
</div>