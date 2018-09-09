<h3 class="m-h">Словарь</h3>
<a href="/dictionary/add"><button type="button" class="btn btn-primary">Добавить</button></a>
<div class="table-responsive m-table">
    <table class="table table-bordered">
       <thead>
            <tr>
                <th>ID</th>
                <th>Word</th>
                <th>Trans</th>
                <th>Direction</th>
                <th>Action</th>
            </tr>
       </thead>
        <tbody>
            <? foreach ($dict as $item):?>
                <tr>
                    <td><?=$item['id']?></td>
                    <td><?=$item['word']?></td>
                    <td><?=$item['trans']?></td>
                    <td><?=$item['direction']?></td>
                    <td>
                        <a href="/dictionary/update/<?=$item['id'];?>"><button type="button" class="btn btn-success">Обновить</button></a>
                        <a href="/dictionary/delete/<?=$item['id'];?>"><button type="button" class="btn btn-danger">Удалить</button></a>
                        <a href="/dictionary/show/<?=$item['id'];?>"> <button type="button" class="btn btn-warning">Показать</button></a>
                    </td>
                </tr>
            <? endforeach; ?>
        </tbody>
    </table>
</div>