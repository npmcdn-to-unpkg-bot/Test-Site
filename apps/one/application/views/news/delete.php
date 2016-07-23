<?php 
// User must be signed to create a news item
if (!is_user_logged_in()) {
    auth_redirect();
}
?>

<p class="text-danger">Please select the ID of the record you want to Delete.</p>

<?php echo $news; ?>

<script type="text/javascript">
    function deleteRecord(id) {
           
           var r = confirm("Delete Record: " + id + ". Are You Sure?");
           
           if (r ==true) {
               
               jQuery.post("<?php echo site_url('apps/one/news/deleteRecord'); ?>",
                {
                    id: id
                },
                function(data, status) {
                   alert(status);
                   window.location.assign("<?php echo site_url('apps/one/news/delete'); ?>");
                });
           }
           else
           {
               // Do Nothing
           }
       }
       
    jQuery(document).ready(function(){
       
       jQuery('tr td:first-child').each(function(index){
           
          var text = jQuery(this).html();
          var html = '<a onClick="deleteRecord('+ text +')"><span class="glyphicon glyphicon-trash"></span>&nbsp;' + text + '</a>';
          
          jQuery(this).html(html);
          
       });
       
       
       
    });
</script>

