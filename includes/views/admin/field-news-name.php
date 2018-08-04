<fieldset>
    <legend class="screen-reader-text"><?php _e('Publication name','xml-sitemap-feed'); ?></legend>
    <input type="text" name="<?php echo $this->prefix; ?>news_tags[name]" id="xmlsf_news_name" value="<?php echo $name; ?>" class="regular-text"> 
    <p class="description">
        <?php printf(__('By default, the general %s setting will be used.','xml-sitemap-feed'),'<a href="options-general.php">'.translate('Site Title').'</a>'); ?> 
        <?php _e('The publication name should match the name submitted on the Google News Publisher Center. If you wish to change it, please read <a href="https://support.google.com/news/publisher/answer/40402" target="_blank">Updated publication name</a>.','xml-sitemap-feed'); ?>
    </p>
</fieldset>