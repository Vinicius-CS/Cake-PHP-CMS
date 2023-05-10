<div>
    <p class="logged"><?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'button float-right']) ?></p>
    <h1><?= __('Articles') ?></h1>
</div>

<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th class="logged">Action</th>
    </tr>

<!-- Here's where we iterate through our $articles query object, printing out article info -->
<?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td class="logged actions">
            <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $article->slug], ['escape' => false, 'title' => 'Edit Article']) ?>
            <?= $this->Form->postLink(
                '<i class="fas fa-trash"></i>',
                ['action' => 'delete', $article->slug],
                ['escape' => false, 'title' => 'Delete Article'],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<script>
    var session = <?= isset($_SESSION['Auth']) | 0 ?>;

    if (!session) {
        const logged = document.getElementsByClassName('logged');

        while (logged.length > 0) {
            logged[0].parentNode.removeChild(logged[0]);
        }
    }
</script>