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
	<div id="icon-tools" class="icon32"><br></div><?php echo "<h2>".__('Social Share Button Settings')."</h2>";?>
		<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="ssb_hidden" value="Y">
        <?php settings_fields( 'ssb_plugin_options' );
				do_settings_sections( 'ssb_plugin_options' );
		?>

<table class="form-table">



	<tr valign="top">
		<th scope="row"><label for="ssb_share_content_display"><?php echo __('Display On Content ?'); ?>: </label></th>
		<td style="vertical-align:middle;">  
        <select name="ssb_share_content_display">
        	<option value="yes" <?php  if($ssb_share_content_display=='yes') echo "selected"; ?>>Yes</option>
            <option value="no" <?php  if($ssb_share_content_display=='no') echo "selected"; ?>>No</option>
           
        </select>        
		</td>
	</tr> 




	<tr valign="top">
		<th scope="row"><label for="ssb_share_content_themes"><?php echo __('Social Share Themes'); ?>: </label></th>
		<td style="vertical-align:middle;">  
        <select name="ssb_share_content_themes">
        	<option value="defualt" <?php  if($ssb_share_content_themes=='defualt') echo "selected"; ?>>Defualt</option> 
        	<option value="flat" <?php  if($ssb_share_content_themes=='flat') echo "selected"; ?>>Flat</option>
            <option value="round" <?php  if($ssb_share_content_themes=='round') echo "selected"; ?>>Round</option>
             <option value="wide" <?php  if($ssb_share_content_themes=='wide') echo "selected"; ?>>Wide</option>
             <option value="bodyname" <?php  if($ssb_share_content_themes=='bodyname') echo "selected"; ?>>Body Name</option>             <option value="packslide" <?php  if($ssb_share_content_themes=='packslide') echo "selected"; ?>>Pack Slide</option>
             <option value="hexa" <?php  if($ssb_share_content_themes=='hexa') echo "selected"; ?>>Hexa</option> 
        </select>        
		</td>
	</tr> 
    
    
 	<tr valign="top">
		<th scope="row"><label for="ssb_share_content_position"><?php echo __('Social Share Position'); ?>: </label></th>
		<td style="vertical-align:middle;">  
        <select name="ssb_share_content_position">
        	<option value="top" <?php  if($ssb_share_content_position=='top') echo "selected"; ?>>Top</option>
            <option value="bottom" <?php  if($ssb_share_content_position=='bottom') echo "selected"; ?>>Bottom</option>
        </select>        
		</td>
	</tr>    
        
        
        
 	<tr valign="top">
		<th scope="row"><label for="ssb_share_content_icon_margin"><?php echo __('Icon Margin'); ?>: </label></th>
		<td style="vertical-align:middle;"> 
        <input name="ssb_share_content_icon_margin" size="5" type="text" value="<?php  if(!empty($ssb_share_content_icon_margin)) echo $ssb_share_content_icon_margin; else echo "0"; ?>" />px
        
       
		</td>
	</tr>        
        
        
        
 	<tr valign="top">
		<th scope="row">
        Need Help ?
        </th>
		<td style="vertical-align:middle;"> 
We will be happy to help you :) <br />
        Please report any issue via our support forum <a href="http://kentothemes.com/questions-answers/">kentothemes.com &raquo; Q&A</a> or aks any question if you need. <br />
       <!--  Check Documentation  <a href="http://kentothemes.com/documentation/">http://kentothemes.com/documentation/</a><br /> -->
      
		</td>
	</tr>  
        

    
</table>
                <p class="submit">
                    <input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
                </p>
		</form>
      



</div>
