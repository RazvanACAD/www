<?php if (!empty($article->errors)) : ?>
    <ul>
        <?php foreach ($article->errors as $error) : ?>
            <li><?= $error ?></li>    
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" id="formArticle">

    <div class="form-group">
        <label for="title" >Title</label>
        <input class="form-control" name="title" id="title" placeholder="Article title" value="<?= !is_null($article->title) ? htmlspecialchars($article->title) : '' ?>">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" rows="4" cols="40" id="content" placeholder="Article content"><?= !is_null($article->content) ? htmlspecialchars($article->content) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <label for="published_at">Publication date and time</label>
        <input class="form-control" name="published_at" id="published_at" type="text" value="<?= !is_null($article->published_at) ? htmlspecialchars($article->published_at) : '' ?>">
    </div>

    <fieldset>
        <legend>Categories</legend>
        <?php foreach ($categories as $category) : ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="category[]" value="<?= $category['id'] ?>" id="category<?= $category['id'] ?>"
                       <?php if (in_array($category['id'], $category_ids)) :?>checked<?php endif; ?>>
                <label class="form-check-label" for="category<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></label>
            </div>
        <?php endforeach; ?>
        
    </fieldset>

    <button class="btn btn-success">Save</button>

</form>
