<h3 class="m-h">Редактирование Записи</h3>
<div class="form-group">
    <form action="/dictionary/update/<?=$row[0]['id']?>" method="post">
        <label class="m-width">Введите слово:</label>
        <input type="text" class="form-control m-width" name="word" value="<?=$row[0]['word']?>"/>

        <label class="m-width">Введите перевод:</label>
        <input type="text" class="form-control m-width" name="trans" value="<?=$row[0]['trans']?>"/>

        <label class="m-width" for="sel1">Выбирите направление перевода:</label>
        <select class="form-control m-width" id="sel1" name="options">
            <option
                <? if ($row[0]['direction'] === 'Англо-Русский'):?>
                    selected="selected"
                <?endif;?>
                selected=""
            >Англо-Русский</option>
            <option
                <? if ($row[0]['direction'] === 'Русско-Англиский'):?>
                    selected="selected"
                <?endif;?>
                selected=""
            >Русско-Англиский</option>
        </select>

        <button type="submit" class="btn btn-success m-top">Редактировать</button>
    </form>
</div>