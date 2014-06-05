<?php

	if(empty($_POST['ssb_hidden']))
		{
			$ssb_share_content_display = get_option( 'ssb_share_content_display' );	
			$ssb_share_content_themes = get_option( 'ssb_share_content_themes' );
			$ssb_share_content_position = get_option( 'ssb_share_content_position' );
			$ssb_share_content_icon_margin = get_option( 'ssb_share_content_icon_margin' );			
		}

	else
		{
		
		if($_POST['ssb_hidden'] == 'Y')
			{
			//Form data sent
			
			
			$ssb_share_content_display = $_POST['ssb_share_content_display'];
			update_option('ssb_share_content_display', $ssb_share_content_display);			
			
			
			
			$ssb_share_content_themes = $_POST['ssb_share_content_themes'];
			update_option('ssb_share_content_themes', $ssb_share_content_themes);
			
			$ssb_share_content_position = $_POST['ssb_share_content_position'];
			update_option('ssb_share_content_position', $ssb_share_content_position);
			
			$ssb_share_content_icon_margin = $_POST['ssb_share_content_icon_margin'];
			update_option('ssb_share_content_icon_margin', $ssb_share_content_icon_margin);			
			
			
			
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>
            
            
            
            
<?php
			}
		} 
?>


<div class="wrap">
<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="ssb_hidden" value="Y">
        <?php settings_fields( 'ssb_plugin_options' );
				do_settings_sections( 'ssb_plugin_options' );
		?>

<div class="wp-settings-pro">
    <div class="heading"><h2>Social Share Button Settings</h2></div>
    
    <div class="settings-saved">

    </div>
    

    
    <div class="setting-descriptions"><p>Control social share button option here, choose different style and themes, display top or bottom of content.</p></div>


    <div class="option-area">
    <div class="option-title"><strong>Display On Content</strong>
    
    </div>
    <div class="option-descriptions">choose 'yes' to display share buttons on content and choose 'No' to hide share buttons on post.
    
    </div>
    
    <div class="option-input">
        <select name="ssb_share_content_display">
        	<option value="yes" <?php  if($ssb_share_content_display=='yes') echo "selected"; ?>>Yes</option>
            <option value="no" <?php  if($ssb_share_content_display=='no') echo "selected"; ?>>No</option>
           
        </select> 
    </div>

</div>


    <div class="option-area">
    <div class="option-title"><strong>Select Buttons Themes</strong>
    
    </div>
    <div class="option-descriptions">Select different style themes to display different style buttons on post.
    </div>
    
    <div class="option-input">
        <select name="ssb_share_content_themes">
        	<option value="defualt" <?php  if($ssb_share_content_themes=='defualt') echo "selected"; ?>>Defualt</option> 
        	<option value="flat" <?php  if($ssb_share_content_themes=='flat') echo "selected"; ?>>Flat</option>
            <option value="round" <?php  if($ssb_share_content_themes=='round') echo "selected"; ?>>Round</option>
             <option value="wide" <?php  if($ssb_share_content_themes=='wide') echo "selected"; ?>>Wide</option>
             <option value="bodyname" <?php  if($ssb_share_content_themes=='bodyname') echo "selected"; ?>>Body Name</option>             <option value="packslide" <?php  if($ssb_share_content_themes=='packslide') echo "selected"; ?>>Pack Slide</option>
             <option value="hexa" <?php  if($ssb_share_content_themes=='hexa') echo "selected"; ?>>Hexa</option> 
        </select>  
    </div>

</div>




<div class="option-area">
    <div class="option-title"><strong>Social Share Position</strong>
    
    </div>
    <div class="option-descriptions">Select different style themes to display different style buttons on post.
    </div>
    
    <div class="option-input">
        <select name="ssb_share_content_position">
        	<option value="top" <?php  if($ssb_share_content_position=='top') echo "selected"; ?>>Top</option>
            <option value="bottom" <?php  if($ssb_share_content_position=='bottom') echo "selected"; ?>>Bottom</option>
        </select>  
    </div>

</div>

    <div class="option-area">
        <div class="option-title"><strong>Buttons Margin</label></strong>
        
        </div>
        <div class="option-descriptions">Margin for buttons.</div>
        <div class="option-input">
<input name="ssb_share_content_icon_margin" size="5" type="text" value="<?php  if(!empty($ssb_share_content_icon_margin)) echo $ssb_share_content_icon_margin; else echo "0"; ?>" />px  
        </div>
    
    </div>


<div class="option-area">
        <div class="option-title"><strong>Need Help ?</strong>
        
        </div>
        <div class="option-descriptions">Please report any issue via our support forum <a href="http://kentothemes.com/questions-answers/">kentothemes.com &raquo; Q&A</a> or aks any question if you need.</div>
        <div class="option-input">

        </div>
    
    </div>


                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>

</div>



		</form>








<style type="text/css">
.wp-settings-pro {
  background: none repeat scroll 0 0 #FFFFFF;
  margin-bottom: 20px;
  padding-bottom: 20px;
  width: 100%;
}

.wp-settings-pro .heading {
  border-bottom: 2px solid #666666;
}




.wp-settings-pro .heading h2 {
  color: #333333;
  font-size: 20px;
  font-weight: bold;
  padding-left: 20px;
}

.wp-settings-pro .heading .updated {
  margin-left: 20px;
}


.wp-settings-pro .submit {
	margin-left: 20px;
}
.wp-settings-pro .setting-descriptions{

}

.wp-settings-pro .setting-descriptions p {
  border-bottom: 1px solid;
  color: #999999;
  font-size: 13px;
  margin-bottom: 15px;
  margin-left: 20px;
  margin-top: 15px;
  padding-bottom: 5px;
}

.wp-settings-pro .option-area {
  margin: 30px 0;
}


.wp-settings-pro .option-area .option-title {
  font-size: 15px;
  margin: 10px 0;
  padding-left: 20px;
}

.wp-settings-pro .option-area .option-descriptions {
  font-size: 13px;
  padding-left: 20px;
}

.wp-settings-pro .option-area .option-input {
  border-bottom: 1px solid #DDDDDD;
  margin-left: 20px;
  padding: 20px 0;
}

</style>







</div>
