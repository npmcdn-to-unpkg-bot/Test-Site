<?php 
// User must be signed to create a news item
if (!is_user_logged_in()) {
    auth_redirect();
}
?>

<p class="text-info">Please select the ID of the record you want to Update.</p>

<?php echo $news; ?>

<div id="updateForm" style="display: none;">
    <?php echo validation_errors(); ?>
    
    <?php echo $error; ?>

    <?php echo form_open_multipart('news/update', 'class="form-horizontal"'); ?>
    
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">Record ID</label>
            <div class="col-sm-10">
                <input id="id" type="input" name="id" class="form-control" value=" " /><br />
            </div>
        </div>
        
        <div class="form-group">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="input" name="slug" class="form-control" value=" " /><br />
            </div>
        </div>
        
        <div class="form-group">
            <label for="date" class="col-sm-2 control-label">Publish Date</label>
            <div class="col-sm-10">
                <input type="input" name="date" class="form-control" value=""/><br />
            </div>
        </div>
        
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="input" name="author" class="form-control" value=" "/><br />
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
            <label for="image" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="input" name="image" class="form-control"/><br />
                <p><a id="newImage">Upload New Image</a></p>
                <div id="imagePlacement" class="well"></div>
                
                <div id="uploadNewImage" style="display: none;">
                    <div class="form-group">
                        <label for="file" class="col-sm-2 control-label">File Upload</label>
                        <div class="col-sm-4">
                            <input type="file" name="userfile"><br />
                        </div>
                    </div>
                </div><!-- #uploadNewImage -->
                
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" name="submit" value="Update News Item"/>
            </div>
        </div>
        
    </form>
</div><!-- #updateForm -->

<script type="text/javascript">
    function updateRecord(id) {
           
        jQuery('#updateForm').show();
        jQuery('input#id').val(id);
        
        jQuery.ajax({
            type: 'POST',
            url: "<?php echo site_url('apps/one/news/get_updateData'); ?>/" + id,
            success: function(data, status){
                var dat = jQuery.parseJSON(data);
                jQuery('input[name="date"]').val(dat.date); 
                jQuery('input[name="title"]').val(dat.title);
                jQuery('input[name="slug"]').val(dat.slug); 
                jQuery('textarea[name="text"]').text(dat.text); 
                jQuery('input[name="author"]').val(dat.author); 
                jQuery('input[name="image"]').val(dat.image);
                
                if(dat.image){
                    jQuery('#imagePlacement').html('<div id="imageHolder"><img id="1" onclick="hideImage(this)" class="thumbnail" src="<?php echo site_url("apps/one/uploads") ?>/' + dat.image + '" width="100px" /></div>');
                }
            },
        });
    }
    function hideImage(x) {
        
        jQuery(x).fadeOut();
        jQuery('input[name="image"]').val('');
    }
       
    jQuery(document).ready(function(){
       
       jQuery('tr td:first-child').each(function(index){
           
          var text = jQuery(this).html();
          var html = '<a onClick="updateRecord('+ text +')"><span class="glyphicon glyphicon-pencil"></span>&nbsp;' + text + '</a>';
          
          jQuery(this).html(html);
          
       });
       
       jQuery('#newImage').click(function() {
           
           jQuery('#uploadNewImage').show();
           
       });
       
       
       
    });
</script>