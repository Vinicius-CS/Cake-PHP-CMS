<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['id' => 'full-featured-non-premium']);
    echo $this->Form->control('tags._ids', ['options' => $tags]);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>

<script src="https://cdn.tiny.cloud/1/6p2crzncauc56pehxt9cqxkmbs9k3sqjwlrl508ys062mb6a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#full-featured-non-premium',
        plugins: 'autoresize importcss searchreplace preview autolink autosave save directionality code visualblocks visualchars fullscreen image editimage link media codesample table charmap pagebreak anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: '',
        toolbar: 'restoredraft undo redo | bold italic underline strikethrough | forecolor backcolor removeformat | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify |  numlist bullist | insertfile image media | link blockquote codesample',
        toolbar_sticky: true,
        link_default_target: '_blank',
        autosave_interval: "30s",
        autosave_prefix: "cakephp-{path}{query}-{id}-",
        autosave_ask_before_unload: false,
        autosave_restore_when_empty: true,
        browser_spellcheck: true,
        autosave_retention: "2m",
        autoresize_overflow_padding: 25,
        autoresize_bottom_margin: 0,
        image_advtab: true,
        content_css: '//www.tiny.cloud/css/codepen.min.css',
        importcss_append: true,
        resize: false,
        height: 520,
        image_caption: false,
        quickbars_selection_toolbar: 'bold italic underline strikethrough | forecolor backcolor removeformat | link blockquote codesample',
        quickbars_image_toolbar: 'alignleft aligncenter alignright | rotateleft rotateright | imageoptions',
        quickbars_insert_toolbar: false,
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'floating',
        contextmenu: "link image imagetools table",
    });
</script>