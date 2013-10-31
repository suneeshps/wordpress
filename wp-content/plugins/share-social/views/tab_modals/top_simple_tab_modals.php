<?php

	$social_channels = $view_data['settings']['top_simple_tab']['social_channels'];

	$bar_layout_design = $view_data['settings']['top_simple_tab']['bar_layout_design'];

	$call_to_action = $view_data['settings']['top_simple_tab']['call_to_action'];

	$visibility_settings = $view_data['settings']['top_simple_tab']['visibility_settings'];

	

	$channels = array(

					'Facebook'=>'Facebook',

					'Twitter'=>'Twitter',

					'Google'=>'Google',

					'Linkedin'=>'Linkedin',

					'Pinterest'=>'Pinterest',

					'Digg'=>'Digg',

					'Myspace'=>'Myspace',

					'Stumbleupon'=>'Stumbleupon',

					'Bebo'=>'Bebo',

					'Blogger'=>'Blogger',

					'Delicious'=>'Delicious',

					'Xing'=>'Xing',

					'Tumblr'=>'Tumblr',

					'Technorati'=>'Technorati',

					'Reddit'=>'Reddit',

					'Netlog'=>'Netlog',

					'Identi'=>'Identi',

					'Friendfeed'=>'Friendfeed',

					'Evernote'=>'Evernote',

					'Diigo'=>'Diigo',

					'VK'=>'VK',

					'Email'=>'Email',

				);

?>

<div id="top_simple_tab_social_channels" class="modal widget-settings" tabindex="-1" role="dialog" aria-labelledby="registerShareLabel" aria-hidden="true">

	 <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <h3><?php echo $social_channels['settings_category']; ?></h3>
        
          </div>
        
          <div class="modal-body">
        
                <div class="drag-links row">
        
                    <div class="col-md-5">
        
                        <h5>Active channels</h5>
        
                        <form class="form-horizontal" id="social-channels-top_simple_tab" novalidate="novalidate" title="<?php echo $social_channels['settings_category']; ?>">
        
                            <ul id="socialsuse" class="connected list" style="margin:0;">
        
                                <?php 
        
                                $socials = explode(',', $social_channels['socials']); 
        
                                foreach($socials as $social){
        
                                    echo '<li class="'.$social.'"><div class="share-icns"></div><span>'.$social.'</span><input type="hidden" id="socials" name="options[socials][]" value="'.$social.'" /></li>';
        
                                    unset($channels["{$social}"]);
        
                                }
        
                                ?>
        
                            </ul>
        
                            <div class="form-group" id="socials_target-group" style="margin-top: 20px;">
        
                                <h5>Open channel sharing in</h5>
        
                                <select class="selectpicker form-control" name="options[socials_target]" id="socials_target" data-style="btn-default">
        
                                    <option value="window" <?php echo($social_channels['socials_target'] == 'window')? 'selected': ''; ?>>New window</option>
        
                                    <option value="tab" <?php echo($social_channels['socials_target'] == 'tab')? 'selected': ''; ?>>New tab</option>
        
                                </select>
        
                            </div>
        
                        </form>
        
                    </div>
        
                    <div class="col-md-2">
        
                        <div class="between-connected">Drag to activate <span class="appz-point-left"></span></div>
        
                    </div>
        
                    <div class="col-md-5">
        
                        <h5>Inactive channels</h5>
        
                        <ul class="connected list no2" style="margin:0;">
        
                           <?php 
        
                            foreach($channels as $channel){
        
                                echo '<li class="'.$channel.'"><div class="share-icns"></div><span>'.$channel.'</span><input type="hidden" id="socials" name="options[socials][]" value="'.$channel.'" /></li>';
        
                            }
        
                            ?>
        
                        </ul>
        
                    </div>
        
                </div>
        
                <div style="clear:both;"></div>
        
          </div>
        
          <div class="modal-footer">
        
            <button class="btn btn-icon btn-default circle_remove" data-dismiss="modal" aria-hidden="true"><i class="appz-close-3"></i> Close</button>
        
            <button type="submit" class="btn btn-icon btn-primary circle_ok save-widget-settings" settings="#social-channels-top_simple_tab" layout="top_simple_tab" data-loading-text="loading..."><i class="appz-checkmark-circle-2"></i> Save</button>
        
          </div>
      </div>
  </div>

</div><!--/Social Channels Settings-->



<div id="top_simple_tab_bar_layout_design" class="modal widget-settings" tabindex="-1" role="dialog" aria-labelledby="registerShareLabel" aria-hidden="true">

	 <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <h3><?php echo $bar_layout_design['settings_category']; ?></h3>
        
          </div>
        
          <div class="modal-body">
        
            <form class="form-horizontal" id="bar-layout-top_simple_tab" novalidate="novalidate" title="<?php echo $bar_layout_design['settings_category']; ?>">
        
            
        
                <div class="row">
        
                
        
                    <div class="col-md-6">
        
                        <div class="form-group" id="bgcolor-group">
        
                            <h5>Background color</h5>
        
                            <div class="input-group">
        
                                <input type="text" id="bgcolor-top_simple_tab" name="options[bgcolor]" value="<?php echo $bar_layout_design['bgcolor']; ?>" class="form-control"/>
        						<span class="input-group-btn">
                                    <button href="javascript:void(0)" class="btn undo-color" target="#bgcolor-top_simple_tab" original="<?php echo $bar_layout_design['bgcolor']; ?>"><i class="appz-undo"></i> Undo</button>
        						</span>
                            </div>
        
                            <br/><br/>
        
                            <div class="palette" target="#bgcolor-top_simple_tab"></div>
        
                        </div>
        
                        
        
                        <div class="form-group span11" id="icons-group">
        
                            <h5>Icons style</h5>
        
                            <select style="width: 100%;" id="icons" name="options[icons]" class="select-icons" layout="top_simple_tab">
        
                                <option value="white" <?php echo($bar_layout_design['icons'] == 'white')? 'selected': ''; ?>>White</option>
        
                                <option value="black" <?php echo($bar_layout_design['icons'] == 'black')? 'selected': ''; ?>>Black</option>
        
                                <option value="icons" <?php echo($bar_layout_design['icons'] == 'icons')? 'selected': ''; ?>>Shiny</option>
        
                                <option value="variety" <?php echo($bar_layout_design['icons'] == 'variety')? 'selected': ''; ?>>Variety</option>
        
                                <option value="satin" <?php echo($bar_layout_design['icons'] == 'satin')? 'selected': ''; ?>>Satin</option>
        
                                <option value="shiny2" <?php echo($bar_layout_design['icons'] == 'shiny2')? 'selected': ''; ?>>Shiny 2</option>
        
                                <option value="elegant" <?php echo($bar_layout_design['icons'] == 'elegant')? 'selected': ''; ?>>Elegant</option>
        
                                <option value="metro" <?php echo($bar_layout_design['icons'] == 'metro')? 'selected': ''; ?>>Metro</option>
                                
                                <option value="milky" <?php echo($bar_layout_design['icons'] == 'milky')? 'selected': ''; ?>>Milky</option>
                                
                                <option value="bald" <?php echo($bar_layout_design['icons'] == 'bald')? 'selected': ''; ?>>Bald</option>
                                
                                <option value="round" <?php echo($bar_layout_design['icons'] == 'round')? 'selected': ''; ?>>Round</option>
        
                            </select>
        
                        </div>
        
                        
        
                        <div class="form-group" id="toolstyle-group">
        
                            <h5>Tooltip style</h5>
        
                            <select class="selectpicker form-control" name="options[toolstyle]" id="toolstyle" data-style="btn-default">
        
                                <option value="darkminimal" <?php echo($bar_layout_design['toolstyle'] == 'darkminimal')? 'selected': ''; ?>>Dark minimal</option>
        
                                <option value="lightminimal" <?php echo($bar_layout_design['toolstyle'] == 'lightminimal')? 'selected': ''; ?>>Light minimal</option>
        
                                <option value="darkgray" <?php echo($bar_layout_design['toolstyle'] == 'darkgray')? 'selected': ''; ?>>Dark gray</option>
        
                            </select>
        
                        </div>
        
                        
        
                        <div class="form-group" id="showat-group">
        
                            <h5>Show bar after</h5>
        
                            <div class="input-group">
        
                                <input type="text" id="showat" name="options[showat]" value="<?php echo $bar_layout_design['showat']; ?>" class="form-control"/>
        
                                <span class="input-group-addon">px</span>
        
                            </div>
        
                        </div>
        
                    </div><!--/span6-->
        
                    
        
                    <div class="col-md-6">
        
                        <div class="form-group" id="textcolor-group">
        
                            <h5>Text color</h5>
        
                            <div class="input-group">
        
                                <input type="text" id="textcolor-top_simple_tab" name="options[textcolor]" value="<?php echo $bar_layout_design['textcolor']; ?>" class="form-control"/>
        						<span class="input-group-btn">
                                    <button href="javascript:void(0)" class="btn undo-color" target="#textcolor-top_simple_tab" original="<?php echo $bar_layout_design['textcolor']; ?>"><i class="appz-undo"></i> Undo</button>
        						</span>
                            </div>
        
                            <br/><br/>
        
                            <div class="palette" target="#textcolor-top_simple_tab"></div>
        
                        </div>
        
                        
        
                        <div class="form-group" id="socials_pos-group">
        
                            <h5>Icons position</h5>
        
                            <select class="selectpicker form-control" name="options[socials_pos]" id="socials_pos" data-style="btn-default">
                            
                            	<option value="cunjo_pos_centered" <?php echo($bar_layout_design['socials_pos'] == 'cunjo_pos_centered')? 'selected': ''; ?>>Centered</option>
        
                                <option value="cunjo_pos_left" <?php echo($bar_layout_design['socials_pos'] == 'cunjo_pos_left')? 'selected': ''; ?>>Left</option>
        
                                <option value="cunjo_pos_right" <?php echo($bar_layout_design['socials_pos'] == 'cunjo_pos_right')? 'selected': ''; ?>>Right</option>
        
                            </select>
        
                        </div>
        
                        
        
                        <div class="form-group" id="shadow-group">
        
                            <h5>Cast shadow</h5>
        
                            <select class="selectpicker form-control" name="options[shadow]" id="shadow" data-style="btn-default">
        
                                <option value="none" <?php echo($bar_layout_design['shadow'] == 'none')? 'selected': ''; ?>>No shadow</option>
        
                                <option value="outside" <?php echo($bar_layout_design['shadow'] == 'outside')? 'selected': ''; ?>>Outside</option>
        
                                <option value="inside" <?php echo($bar_layout_design['shadow'] == 'inside')? 'selected': ''; ?>>Inside</option>
        
                            </select>
        
                        </div>
        
                    </div><!--/span6-->
        
                    <div style="clear:both"></div>
                
                </div><!--/row-->
        
                
        
            </form>
        
          </div>
        
          <div class="modal-footer">
        
            <button class="btn btn-icon btn-default circle_remove" data-dismiss="modal" aria-hidden="true"><i class="appz-close-3"></i> Close</button>
        
            <button type="submit" class="btn btn-icon btn-primary circle_ok save-widget-settings" settings="#bar-layout-top_simple_tab" layout="top_simple_tab" data-loading-text="loading..."><i class="appz-checkmark-circle-2"></i> Save</button>
        
          </div>
      </div>
  </div>

</div><!--/Bar layout design Settings-->



<div id="top_simple_tab_call_to_action" class="modal widget-settings" tabindex="-1" role="dialog" aria-labelledby="registerShareLabel" aria-hidden="true">

	 <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <h3><?php echo $call_to_action['settings_category']; ?></h3>
        
          </div>
        
          <div class="modal-body">
        
            <form class="form-horizontal" id="call-to-action-top_simple_tab" novalidate="novalidate" title="<?php echo $call_to_action['settings_category']; ?>">
        
                <div class="row">
        
                    <div class="col-md-12">
        
                        <div class="form-group" id="message-group">
        
                            <h5>Message</h5>
        
                            <div class="input-group">
        
                                <span class="input-group-addon"><i class="appz-bubble" style="font-size: 18px"></i></span>
        
                                <input type="text" id="message" name="options[message]" value="<?php echo $call_to_action['message']; ?>" class="form-control"/>
        
                            </div>
        
                        </div>
        
                    </div><!--/span12-->
        
                </div><!--/row-->
        
                
        
                <div class="row">
        
                    <div class="col-md-6">
        
                        <div class="form-group span11" id="messageicon-group">
        
                            <h5>Message Icon</h5>
        
                            <select style="width: 100%;" id="messageicon" name="options[messageicon]" class="select-message-icons" layout="top_simple_tab">
        
                                <option value="Sharetalk" <?php echo($call_to_action['messageicon'] == 'Sharetalk')? 'selected': ''; ?>>Talk</option>
        
                                <option value="Shareannounce" <?php echo($call_to_action['messageicon'] == 'Shareannounce')? 'selected': ''; ?>>Announce</option>
        
                                <option value="Shareimportant" <?php echo($call_to_action['messageicon'] == 'Shareimportant')? 'selected': ''; ?>>Important</option>
        
                                <option value="Sharestar" <?php echo($call_to_action['messageicon'] == 'Sharestar')? 'selected': ''; ?>>Star</option>
        
                                <option value="Shareinfo" <?php echo($call_to_action['messageicon'] == 'Shareinfo')? 'selected': ''; ?>>Info</option>
        
                                <option value="Sharetalk2" <?php echo($call_to_action['messageicon'] == 'Sharetalk2')? 'selected': ''; ?>>Talk 2</option>
        
                                <option value="Shareannounce2" <?php echo($call_to_action['messageicon'] == 'Shareannounce2')? 'selected': ''; ?>>Announce 2</option>
        
                                <option value="Shareimportant2" <?php echo($call_to_action['messageicon'] == 'Shareimportant2')? 'selected': ''; ?>>Important 2</option>
        
                                <option value="Sharestar2" <?php echo($call_to_action['messageicon'] == 'Sharestar2')? 'selected': ''; ?>>Star 2</option>
        
                                <option value="Shareinfo2" <?php echo($call_to_action['messageicon'] == 'Shareinfo2')? 'selected': ''; ?>>Info 2</option>
        
                                <option value="Shareheart" <?php echo($call_to_action['messageicon'] == 'Shareheart')? 'selected': ''; ?>>Heart</option>
        
                                <option value="Sharebasket" <?php echo($call_to_action['messageicon'] == 'Sharebasket')? 'selected': ''; ?>>Basket</option>
        
                                <option value="Shareimportant3" <?php echo($call_to_action['messageicon'] == 'Shareimportant3')? 'selected': ''; ?>>Important 3</option>
        
                            </select>
        
                        </div>
        
                        <div class="form-group span11" id="activatelink-group-top_simple_tab">
        
                            <h5>Message Link</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input id="message-has-link-top_simple_tab" type="checkbox" <?php echo(empty($call_to_action['messagelink']) || $call_to_action['messagelink'] == '')? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                        <?php 
        
                        if(empty($call_to_action['messagelink']) || $call_to_action['messagelink'] == '') {
        
                            $link_settings = 'style="display: none;"';
        
                        }
        
                        ?>
        
                        <div class="form-group" id="messagebtncolor-group-top_simple_tab" <?php echo $link_settings; ?>>
        
                            <h5>Button background color</h5>
        
                            <div class="input-group">
        
                                <input type="text" id="messagebtncolor-top_simple_tab" name="options[messagebtncolor]" value="<?php echo $call_to_action['messagebtncolor']; ?>" class="form-control"/>
        						<span class="input-group-btn">
                                    <button href="javascript:void(0)" class="btn undo-color" target="#messagebtncolor-top_simple_tab" original="<?php echo $call_to_action['messagebtncolor']; ?>"><i class="appz-undo"></i> Undo</button>
        						</span>
                            </div>
        
                            <br/><br/>
        
                            <div class="palette" target="#messagebtncolor-top_simple_tab"></div>
        
                        </div>
        
                    </div><!--/span6-->
        
                    
        
                    <div class="col-md-6">
        
                        <div class="form-group" id="message_pos-group">
        
                            <h5>Message position</h5>
        
                            <select class="selectpicker form-control" name="options[message_pos]" id="message_pos" data-style="btn-default">
        
                                <option value="cunjo_pos_left" <?php echo($call_to_action['message_pos'] == 'cunjo_pos_left')? 'selected': ''; ?>>Left</option>
        
                                <option value="cunjo_pos_right" <?php echo($call_to_action['message_pos'] == 'cunjo_pos_right')? 'selected': ''; ?>>Right</option>
        
                            </select>
        
                        </div>
        
                        <div class="form-group" id="messagebtn-group-top_simple_tab" <?php echo $link_settings; ?>>
        
                            <h5>Text on button</h5>
        
                            <input type="text" class="form-control" name="options[messagebtn]" id="messagebtn" value="<?php echo $call_to_action['messagebtn']; ?>" />
        
                        </div>
        
                        <div class="form-group" id="messagebtntext-group-top_simple_tab" <?php echo $link_settings; ?>>
        
                            <h5 style="margin-top: 1px;">Button text color</h5>
        
                            <div class="input-group">
        
                                <input type="text" id="messagebtntext-top_simple_tab" name="options[messagebtntext]" value="<?php echo $call_to_action['messagebtntext']; ?>" class="form-control"/>
        						<span class="input-group-btn">
                                    <button href="javascript:void(0)" class="btn undo-color" target="#messagebtntext-top_simple_tab" original="<?php echo $call_to_action['messagebtntext']; ?>"><i class="appz-undo"></i> Undo</button>
        						</span>
                            </div>
        
                            <br/><br/>
        
                            <div class="palette" target="#messagebtntext-top_simple_tab"></div>
        
                        </div>
        
                    </div><!--/span6-->
        
                    
        
                <div class="row">
        
                    <div class="col-md-12">
        
                        <div class="form-group" id="messagelink-group-top_simple_tab" <?php echo $link_settings; ?>>
        
                            <h5>Button Link</h5>
        
                            
        
                            <div class="input-group">
        
                                <span class="input-group-addon"><i class="appz-earth" style="font-size: 18px;"></i></span>
        
                                <input type="text" id="messagelink-top_simple_tab" name="options[messagelink]" value="<?php echo $call_to_action['messagelink']; ?>" class="form-control"/>
        
                            </div>
        
                        </div>
        
                    </div><!--/span12-->
        
                </div><!--/row-->
        
                
        
                </div><!--/row-->
        
            </form>
        
          </div>
        
          <div class="modal-footer">
        
            <button class="btn btn-icon btn-default circle_remove" data-dismiss="modal" aria-hidden="true"><i class="appz-close-3"></i> Close</button>
        
            <button type="submit" class="btn btn-icon btn-primary circle_ok save-widget-settings" settings="#call-to-action-top_simple_tab" layout="top_simple_tab" data-loading-text="loading..."><i class="appz-checkmark-circle-2"></i> Save</button>
        
          </div>
      </div>
  </div>

</div><!--/Call to action Settings-->



<div id="top_simple_tab_visibility_settings" class="modal widget-settings" tabindex="-1" role="dialog" aria-labelledby="registerShareLabel" aria-hidden="true">

	 <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <h3><?php echo $visibility_settings['settings_category']; ?></h3>
        
          </div>
        
          <div class="modal-body">
        
            <form class="form-horizontal" id="visibility-settings-top_simple_tab" novalidate="novalidate" title="Visibility settings">
        		<?php if( $view_data['site_list'] != NULL ): ?>
                <div class="row">
                	<div class="col-md-12">
                    	<div class="form-group span11" id="exclude_blogs-group">
                        
                        	<h5>WPMU - Hide widget on specific blogs</h5>
        
                            <select name="options[exclude_blogs][]" id="exclude_blogs" multiple ui_select style="width: 100%;" data-placeholder="Click to select blogs">
								<?php 
										  			
									  foreach ( $view_data['site_list'] as $bid ) {
										  
										    $current_blog_details = get_blog_details( array( 'blog_id' => $bid->blog_id ) );
			
											$option = '<option value="' . $bid->blog_id . '" '.((in_array($bid->blog_id, explode(',', $visibility_settings['exclude_blogs'])))? 'selected' : '').'>';
			
											$option .= $current_blog_details->blogname;
			
											$option .= '</option>';
			
											echo $option;
			
									  }

                                 ?>
        
                            </select>
                            
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row">
        
                    <div class="col-md-6">
        
                        <div class="form-group span11" id="display_icons-group">
        
                            <h5>Display share icons</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input data-toggle="value" target_id="display_icons-top_simple_tab" target_name="options[display_icons]" type="checkbox" value="1" <?php echo($visibility_settings['display_icons'] == 0)? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                        <div class="form-group span11" id="exclude_pages-group">
        
                            <h5>Hide widget on specific pages</h5>
        
                            <select name="options[exclude_pages][]" id="exclude_pages" multiple ui_select style="width: 100%;" <?php echo(($view_data['site_list'] != NULL)? 'disabled' : 'data-placeholder="Click to select pages"'); ?>>
								<?php 
        						  	  if($view_data['site_list'] == NULL) {
										  
										  $pages = get_pages(); 
				
										  foreach ( $pages as $page ) {
				
												$option = '<option value="' . $page->ID . '" '.((in_array($page->ID, explode(',', $visibility_settings['exclude_pages'])))? 'selected' : '').'>';
				
												$option .= $page->post_title;
				
												$option .= '</option>';
				
												echo $option;
				
										  }
									  }
									  else {
										 echo '<option selected="selected">Temporary disabled for WPMU</option>'; 
									  }

                                 ?>
        
                            </select>
        
                        </div>
        
                        <div class="form-group span11" id="on_home-group">
        
                            <h5>Show widget on Home page</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input data-toggle="value" target_id="on_home-top_simple_tab" target_name="options[on_home]" type="checkbox" value="1" <?php echo($visibility_settings['on_home'] == 0)? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                        <div class="form-group span11" id="on_posts-group">
        
                            <h5>Show widget on posts</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input data-toggle="value" target_id="on_posts-top_simple_tab" target_name="options[on_posts]" type="checkbox" value="1" <?php echo($visibility_settings['on_posts'] == 0)? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                    </div><!--/span6-->
        
                    
        
                    <div class="col-md-6">
        
                        <div class="form-group span11" id="display_message-group">
        
                            <h5>Display message</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input data-toggle="value" target_id="display_message-top_simple_tab" target_name="options[display_message]" type="checkbox" value="1" <?php echo($visibility_settings['display_message'] == 0)? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                        <div class="form-group span11" id="exclude_pages-group">
        
                            <h5>Hide widget on specific posts</h5>
        
                            <select name="options[exclude_posts][]" id="exclude_posts" multiple ui_select style="width: 100%;" <?php echo(($view_data['site_list'] != NULL)? 'disabled' : 'data-placeholder="Click to select posts"'); ?>>
        
                                <?php 
								
								if($view_data['site_list'] == NULL) {
        
                                  $posts = get_posts(); 
        
                                  foreach ( $posts as $post ) {
        
                                        $option = '<option value="' . $post->ID . '" '.((in_array($post->ID, explode(',', $visibility_settings['exclude_posts'])))? 'selected' : '').'>';
        
                                        $option .= $post->post_title;
        
                                        $option .= '</option>';
        
                                        echo $option;
        
                                  }
								}
								  else {
									 echo '<option selected="selected">Temporary disabled for WPMU</option>'; 
								  }
        
                                 ?>
        
                            </select>
        
                        </div>
        
                        <div class="form-group span11" id="on_pages-group">
        
                            <h5>Show widget on pages</h5>
        
                            <div class="toggle-button" data-toggleButton-style-enabled="info">
        
                                <input data-toggle="value" target_id="on_pages-bottom_tab" target_name="options[on_pages]" type="checkbox" value="1" <?php echo($visibility_settings['on_pages'] == 0)? '': 'checked="checked"'; ?>/>
        
                            </div>
        
                        </div>
        
                        <div class="form-group span11" id="on_custom-group">
        
                            <h5>Show widget on custom post types</h5>
        
                            <select name="options[on_custom][]" id="on_custom" multiple ui_select style="width: 100%;" <?php echo(($view_data['site_list'] != NULL)? 'disabled' : 'data-placeholder="Click to select post types"'); ?>>
        
                                <?php 
								
								if($view_data['site_list'] == NULL) {
        
                                    $args=array(
        
                                      'public' => true,
        
                                      '_builtin' => false
        
                                    );
        
                                  $post_types=get_post_types($args,'names');
        
                                  foreach ( $post_types as $post_type ) {
        
                                        $option = '<option value="' . $post_type . '" '.((in_array($post_type, explode(',', $visibility_settings['on_custom'])))? 'selected' : '').'>';
        
                                        $option .= $post_type;
        
                                        $option .= '</option>';
        
                                        echo $option;
        
                                  }
								}
								  else {
									 echo '<option selected="selected">Temporary disabled for WPMU</option>'; 
								  }
        
                                 ?>
        
                            </select>
        
                        </div>
        
                    </div><!--/span6-->
        
                    
        
                </div><!--/row-->
        
        
        
            </form>
        
          </div>
        
          <div class="modal-footer">
        
            <button class="btn btn-icon btn-default circle_remove" data-dismiss="modal" aria-hidden="true"><i class="appz-close-3"></i> Close</button>
        
            <button type="submit" class="btn btn-icon btn-primary circle_ok save-widget-settings" settings="#visibility-settings-top_simple_tab" layout="top_simple_tab" data-loading-text="loading..."><i class="appz-checkmark-circle-2"></i> Save</button>
        
          </div>
      </div>
  </div>

</div><!--/Visibility Settings-->



<!---Preview Widget--->

<div id="preview_top_simple_tab" class="modal widget-preview-modal" tabindex="-1" role="dialog" wp_address="<?php echo get_site_url(); ?>/?cunjo=top_simple_tab" aria-hidden="true">

	 <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <h3>Preview</h3>
        
          </div>
        
          <div class="modal-body">
        
            Preview here
        
          </div>
        
          <div class="modal-footer">
        
            <button class="btn btn-icon btn-default circle_remove" data-dismiss="modal" aria-hidden="true"><i class="appz-close-3"></i> Close</button>
        
          </div>
      </div>
  </div>

</div><!--/Preview Widget-->

<?php //echo '<pre>'.print_r($view_data, true).'</pre>'; ?>