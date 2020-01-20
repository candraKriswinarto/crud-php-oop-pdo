<?php 
  require_once("./templates/header.php");
  include "./includes/class-autoload.inc.php";

  $posts = new Posts();

  $post = $posts->editPost($_GET['id']);
  $id = $post['id'];
  $title = $post['title'];
  $body = $post['body'];
  $author = $post['author'];

?>

  <div class="text-center my-5">
    <h3>Edit post</h3>
  </div>
  <div class="row">
    <div class="col-md-7 mx-auto">
      <!-- form input -->
      <form method="POST" action="post.process.php?send=update&id=<?= $id ?>">
        <div class="form-group">
          <label>Title: </label>
          <input class="form-control" name="post-title" type="text" value="<?= $title ?>" required>
        </div>
        <div class="form-group">
          <label>Content: </label>
          <textarea class="form-control"  name="post-content" rows="8" required><?= $body ?></textarea>
        </div>
        <div class="form-group">
          <label>Author: </label>
          <input class="form-control" name="post-author" type="text" value="<?= $author ?>" required>
        </div>
          <a href="index.php" class="btn btn-secondary">Close</a>
          <button type="submit" class="btn btn-primary">Update post</button>
      </form>
    </div>
  </div>
<?php 
  require_once("./templates/footer.php");
?>