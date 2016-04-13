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