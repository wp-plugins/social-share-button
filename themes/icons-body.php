<?php

function ssb_share_body()
	{
		
		$ssb_share_content_themes = get_option( 'ssb_share_content_themes' );
		$ssb_share_icons = "";
		if($ssb_share_content_themes=='defualt')
			{
				$ssb_share_icons.= '<table ><tr>
				<td width="90">
<iframe src="//www.facebook.com/plugins/like.php?href='.ssb_share_get_url().'&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=743541755673761" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
				</td>
    
';

				
				$ssb_share_icons.= '
					<td width="90" >
				
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.ssb_share_get_url().'">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");</script>
					</td>';				
			
				$ssb_share_icons.= '
					<td width="70">
				<script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>
<div class="g-plusone" data-size="medium" data-href="'.ssb_share_get_url().'"></div>
					</td>';				
			
			
				$ssb_share_icons.= '
					<td width="110">
				<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: en_US
</script>
<script type="IN/Share" data-url="'.ssb_share_get_url().'" data-counter="right"></script>
					
					</td>';			
			
				$ssb_share_icons.= '
					<td width="100">
					<script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script><td>
					</td>';
	
					
				
				$ssb_share_icons.= '</tr></table>';
				
				
				
						
					
			}
		else if($ssb_share_content_themes=='flat' || $ssb_share_content_themes=='round'|| $ssb_share_content_themes=='wide')
			{

				$ssb_share_icons.="
					<a class='fb' href='https://www.facebook.com/sharer/sharer.php?u=".ssb_share_get_url()."' ><span class='icon'></span><span class='count'>2</span></a>
					<a class='gplus' href='https://plus.google.com/share?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>45</span></a>
					<a class='twitter' href='https://twitter.com/intent/tweet?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>100</span></a>
					<a class='linkedin' href='https://www.linkedin.com/shareArticle?mini=true&url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>145</span></a>
					<a class='pineterst' href='https://pinterest.com/pin/create/button/?url=".ssb_share_get_url()."&media=".ssb_share_get_image()."'><span class='icon'></span><span class='count'>7</span></a>
					<a class='reddit' href='http://www.reddit.com/submit?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>60</span></a>";
			}
		else if($ssb_share_content_themes=='bodyname')
			{

				$ssb_share_icons.="
					<a class='fb' href='https://www.facebook.com/sharer/sharer.php?u=".ssb_share_get_url()."' ><span class='icon'></span><span class='body'>Share</span><span class='count'>15</span></a>
					<a class='gplus' href='https://plus.google.com/share?url=".ssb_share_get_url()."'><span class='icon'></span><span class='body'>Plus</span><span class='count'>17</span></a>
					<a class='twitter' href='https://twitter.com/intent/tweet?url=".ssb_share_get_url()."'><span class='icon'></span><span class='body'>Tweet</span><span class='count'>12</span></a>
					<a class='linkedin' href='https://www.linkedin.com/shareArticle?mini=true&url=".ssb_share_get_url()."'><span class='icon'></span><span class='body'>Share</span><span class='count'>78</span></a>
					<a class='pineterst' href='https://pinterest.com/pin/create/button/?url=".ssb_share_get_url()."&media=".ssb_share_get_image()."'><span class='icon'></span><span class='body'>PinIt!</span><span class='count'>99</span></a>
					<a class='reddit' href='http://www.reddit.com/submit?url=".ssb_share_get_url()."'><span class='icon'></span><span class='body'>Reddit</span><span class='count'>100</span></a>";
			}
			
		else if($ssb_share_content_themes=='packslide')
			{

				$ssb_share_icons.="
					<a class='fb' href='https://www.facebook.com/sharer/sharer.php?u=".ssb_share_get_url()."' ><span class='icon'></span><span class='count'>15</span></a>
					<a class='gplus' href='https://plus.google.com/share?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>17</span></a>
					<a class='twitter' href='https://twitter.com/intent/tweet?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>12</span></a>
					<a class='linkedin' href='https://www.linkedin.com/shareArticle?mini=true&url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>78</span></a>
					<a class='pineterst' href='https://pinterest.com/pin/create/button/?url=".ssb_share_get_url()."&media=".ssb_share_get_image()."'><span class='icon'></span><span class='count'>99</span></a>
					<a class='reddit' href='http://www.reddit.com/submit?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>100</span></a>";
			}	
			
			
	
		else if($ssb_share_content_themes=='hexa')
			{
				$ssb_share_icons.="
					<a class='fb' href='https://www.facebook.com/sharer/sharer.php?u=".ssb_share_get_url()."' ><span class='icon'></span><span class='count'>15</span></a>
					<a class='gplus' href='https://plus.google.com/share?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>17</span></a>
					<a class='twitter' href='https://twitter.com/intent/tweet?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>12</span></a>
					<a class='linkedin' href='https://www.linkedin.com/shareArticle?mini=true&url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>78</span></a>
					<a class='pineterst' href='https://pinterest.com/pin/create/button/?url=".ssb_share_get_url()."&media=".ssb_share_get_image()."'><span class='icon'></span><span class='count'>99</span></a>
					<a class='reddit' href='http://www.reddit.com/submit?url=".ssb_share_get_url()."'><span class='icon'></span><span class='count'>100</span></a>";
			}	
			
			
			
			
			
			
			

		return $ssb_share_icons;
	}
?>