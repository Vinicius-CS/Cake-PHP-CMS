<h1><?= h($article->title) ?></h1>
<p><?= htmlspecialchars_decode(h($article->body)) ?></p>
<p><b>Tags:</b> <?= htmlspecialchars_decode(h($article->tag_string_linked)); ?></p>

<div style="display: flex; align-items: center">
    <p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
    <p class="logged" style="margin-left: 10px"><?= $this->Html->link('<i class="fas fa-pencil-alt"></i>', ['action' => 'edit', $article->slug], ['escape' => false, 'title' => 'Edit Article']) ?></p>
</div>

<script>
    var session = <?= isset($_SESSION['Auth']) | 0 ?>;

    if (!session) {
        const logged = document.getElementsByClassName('logged');

        while (logged.length > 0) {
            logged[0].parentNode.removeChild(logged[0]);
        }
    }
</script>