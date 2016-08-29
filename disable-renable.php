
                        



                            <?php
                                $ids = explode("_", $feed['id']);
                             

                              echo
                            ' <a class="btn" href="javascript:post_disable(\''.$feed['id'].'\')">'.
                              'Disable'.
                             '</a>'; } 
                             {echo' <a class="btn" href="javascript:post_re_enable(\''.$feed['id'].'\')">'.
                              'Re-Enable'.
                             '</a>'; };
                            ?>
                                 <?php endforeach; ?>
                     


            


         <script>
  

           function post_disable(id) {
        if(confirm("Do you want to disable this item?")) {
            document.location.href = "<?php echo site_url('content/post_disable'); ?>/" + id;
           }
            }   

         function post_re_enable(id) {
        if(confirm("Do you want to re-enable this item?")) {
            document.location.href = "<?php echo site_url('content/post_re_enable'); ?>/" + id;
         }
           }     
           </script>