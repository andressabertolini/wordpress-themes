<?php
    /**
    *********************************************************
    *   404 Page
    *   @package diadge
    */   

    if (!empty($_SERVER["SCRIPT_FILENAME"]) && "comments.php" == basename($_SERVER["SCRIPT_FILENAME"]))
        die(esc_html__("Error","diadge"));
 
    if (post_password_required()){ ?>
        <p class="comment-title"><?php esc_html_e("Enter your password to view comments","diadge"); ?></p>
    <?php
        return;
    }
?>
 
<div id="comments" class="comments-area">

    <div class="post-single">
        <?php if(comments_open()) : ?>
        
            <div id="respond">
                <h2 class="comment-title"><?php esc_html_e("Leave your comment!","diadge"); ?></h2>
         
                <form action="<?php echo get_option("siteurl"); ?>/wp-comments-post.php" method="post" id="commentform">
                    <fieldset>
                        <?php if ($user_ID) : ?>
         
                        <p><?php esc_html_e("Logged in as","diadge");?> <?php echo $user_identity; ?>. <a href="<?php echo wp_logout_url(); ?>"><?php esc_html_e("Logout","diadge");?> &raquo;</a></p>
         
                        <?php else : ?>
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="comment-label" for="author"><?php esc_html_e("Name","diadge"); ?>:</label>
                                <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="comment-fields"/>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class="comment-label" for="author"><?php esc_html_e("Email","diadge"); ?>:</label>
                                <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="comment-fields"/>
                            </div>                
                        </div>
         
                        <?php endif; ?>
         
                        <label class="comment-label" for="comment"><?php esc_html_e("Comment","diadge"); ?>:</label>
                        <textarea name="comment" id="comment" rows="" cols="" class="comment-fields comment-msg"></textarea>
         
                        <input type="submit" value="Send" class="comment-send" />
         
                        <?php comment_id_fields(); ?>
                        <?php do_action("comment_form", $post->ID); ?>
                    </fieldset>
                </form>
                <p class="cancel"><?php cancel_comment_reply_link(esc_html__("Cancel","diadge")); ?></p>
            </div>

        <?php else : ?>           
            <h3><?php esc_html_e("Comments are disabled","diadge");?></h3>
           
        <?php endif; ?>
    </div>

    
    <?php if ( have_comments() ) : ?> 
     
            <ol class="commentlist">
            <?php wp_list_comments("avatar_size=64&type=comment"); ?>
        </ol>
     
            <?php if ($wp_query->max_num_pages > 1) : ?>
            <div class="pagination">
            <ul>
                <li><?php previous_comments_link(esc_html__("Previous","diadge")); ?></li>
                <li><?php next_comments_link(esc_html__("Next","diadge")); ?></li>
            </ul>
        </div>
        <?php endif; ?>
     
    <?php endif; ?>
        
    
</div>