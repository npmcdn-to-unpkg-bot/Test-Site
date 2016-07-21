<?php 
// User must be signed to create a news item
if (!is_user_logged_in()) {
    auth_redirect();
}
?>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo $error; ?>

<?php echo form_open_multipart('news/create', 'class="form-horizontal"'); ?>

    <div class="form-group">
        <label for="date" class="col-sm-2 control-label">Publish Date</label>
        <div class="col-sm-10">
            <input type="input" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled/><br />
        </div>
    </div>
    
    <div class="form-group">
        <label for="author" class="col-sm-2 control-label">Author</label>
        <div class="col-sm-10">
            <input type="input" name="author" class="form-control" value="<?php echo $author->display_name; ?>"/><br />
        </div>
    </div>
    
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input type="input" name="title" class="form-control"/><br />
        </div>
    </div>
    
    <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Text</label>
        <div class="col-sm-10">
            <textarea name="text" class="form-control" rows="10" cols="100"></textarea><br />
        </div>
    </div>
    
    <div class="form-group">
        <label for="file" class="col-sm-2 control-label">File Upload</label>
        <div class="col-sm-4">
            <input type="file" name="userfile"><br />
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default" name="submit" value="Create News Item"/>
        </div>
    </div>
    
</form>