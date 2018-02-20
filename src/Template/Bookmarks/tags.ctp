<h1>
    Закладки с тегами
    <?= $this->Text->toList(h($tags)) ?>
</h1>

<section>
    <?php foreach ($bookmarks as $bookmark): ?>
    <article>
        <!-- Используем HtmlHelper для создания ссылок -->
        <h4><?= $this->Html->link($bookmark->title, $bookmark->url) ?></h4>
        <small><?= h($bookmark->url) ?></small>

        <!-- Используем TextHelper для форматирования текста -->
        <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
    </article>
    <?php endforeach; ?>
</section>
