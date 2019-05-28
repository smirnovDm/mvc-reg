<table>
    <th>title</th>
    <th>text</th>
    <?php foreach($this->newsList as $news_item):?>
    <td><?= $news_item['title']?></td>
    <td><?= $news_item['text']?></td>
    <?php endforeach; ?>
</table>

