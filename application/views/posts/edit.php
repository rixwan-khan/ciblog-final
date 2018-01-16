<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('posts/create')?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="Body">Body</label>
    
    <textarea type="password" class="form-control" name="editor1" placeholder="Add Body" value="<?php echo $post['body']; ?>"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>