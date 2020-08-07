<?php
 /**
  * File to deactivate all active plugins
  * Note: this file must be in the same directory as your wp-config.php file
  *
  * @author Precious Omonzejele <me@codexplorer.ninja>
  * @author URI https://github.com/preciousomonze
  */
  if(!file_exists("wp-config.php")){
	  $wa_msg = "Hi Precious, why can't you find my wp-config.php file 😰";
	$msg = '<h4><p>Please make sure this file is in the same directory or folder as <q>wp-config.php</q>,
	 i hope you\'re doing it right? 😑 <br/>Cause i cant find the <q>wp-config.php</q> file 😒<br/>
	 Please <a href="https://github.com/Preyous/deactivate-all-active-wp-plugins/blob/master/README.md">click this link</a> for instructions.
	 </p>
	 <strong><a href="https://wa.me/2349021610260?text='.urlencode($wa_msg).'" title="contact me on whatsapp">click this link</a>
    to contact me on whatsapp if you still don\'t get 😪</strong></h4>
	 </h4>';
  }
  else{//carry on
	require "wp-config.php";
	$opt_name = 'active_plugins';
	if(empty(get_option($opt_name))){
		$msg = '<h4>It\'s okay oo, all plugin(s) have already been deactivated 😒😪
		<p>erm you can drop something for your boy if you wish,
		let money fall on me 😗😁 <br/>please <strong><a href="https://wa.me/2349021610260?text='.urlencode($wa_msg).'" title="contact me on whatsapp">click this link</a>
		to contact me on whatsapp</strong></h4>';
	}
	else{
		if(update_option($opt_name,'')){
			$wa_msg = "Hi, Precious let me drop some money for you, send your account number :) , you deserve some accolades.";
			$msg = '<h4><strong>All done</strong><br/>*clears throat, that\'s all 😌<br/> <p>erm you can drop something for your boy if you wish, 
			let money fall on me 😗😁 <br/>please <strong><a href="https://wa.me/2349021610260?text='.urlencode($wa_msg).'" title="contact me on whatsapp">click this link</a>
			to contact me on whatsapp</strong></h4>';
		}
		else{
		$wa_msg = "hi precious, Please the file in https://github.com/Preyous/deactivate-all-active-wp-plugins doesn't work for me :(";
		$msg = 'Something went wrong, try again, if it persists, please <strong><a href="https://wa.me/2349021610260?text='.urlencode($wa_msg).'" title="contact me on whatsapp">click this link</a>
		to contact me on whatsapp</strong>';
		}
	}
   $msg .= ' <p>Please feel free to let me know if this script Doesnt work for you anymore 🤗 </p>';
 }
  //*clears throat, that's all :)
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <title>deactivate plugin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <body>
    <?php echo $msg; ?>
    </body>
  </html>
