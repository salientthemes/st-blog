var frontend_customizer_id = '#frontend-customizer';

jQuery(window).load(function(){
	// create form
	create_chatbox_ui();

	// minimize
	minimize_chatbox();

	// interact
	interact();
});

function create_chatbox_ui() {
	var username = '';
	if(jQuery('#frontend-customizer-ip').text()) {
		username = jQuery('#frontend-customizer-ip').text() + ' ji';
	}
	var markup = 
	`<div class="frontend-customizer-wrapper">
		<div class="frontend-customizer-title">
			Chat Bot
			<div class="control">
				<span class="minimize"><i class="fas fa-minus"></i></span>
			</div>
		</div>
		<div class="fc-msg-display"><p class="text-right">Hello `+username+`! Want AI to customize theme?</p></div>
		<form class="fc-form">
			<input type="text" class="fc-input-msg" value="" placeholder="Please type something">
		</form>
	</div>
	`;

	jQuery(frontend_customizer_id).html(markup);

	if(username != '') {
		jQuery(frontend_customizer_id).addClass('d-block');
	}
}

function minimize_chatbox() {
	jQuery('.control .minimize').click(function() {
		jQuery('#frontend-customizer').toggleClass('minimize');

		if(jQuery('#frontend-customizer').hasClass('minimize')) {
		}
		else {
			jQuery('#frontend-customizer .fc-input-msg').focus();
		}
	});
}

function interact() {
	// chat
	jQuery('form.fc-form').submit(function(){
		var input_msg = jQuery('.fc-input-msg').val().toLowerCase();

		console.log(input_msg);

		// empty input_msg
		jQuery('.fc-input-msg').val('');
		
		var bot_msg = frontend_customizer_run(input_msg);

		input_msg = '<p>'+input_msg+'</p>';
		jQuery('.fc-msg-display').append(input_msg + bot_msg);


		return false;
	});	
}

function frontend_customizer_run($input_msg) {
	var bot_msg;

	switch ($input_msg) {
	    case 'help':
	        bot_msg = `type '1 or dark-theme-coloured enable'<br>
	        			type '2 or dark-theme enable'<br>
	        			type '-3 or box-layout disable'<br>
	        			type '4 or left-sidebar enable'<br>
	        			type '5 or no-sidebar enable'<br>
	        			type '6 or big-logo enable'<br>
	        			type '7 or logo-left enable'<br>
	        			type '8 or logo-right enable'<br>
	        			type '0 or hide to minimize'
	        			'`;
	        break;

	    case '1':
	    case 'dark-theme-coloured enable':
	        bot_msg = "enabling dark-theme-coloured";
	        dark_theme_coloured('enable');
	        break;
	    case '-1':
	    case 'dark-theme-coloured disable':
	        bot_msg = "disabling dark-theme-coloured";
	        dark_theme_coloured('disable');
	        break;

	    case '2':
	    case 'dark-theme enable':
	        bot_msg = "enabling dark-theme";
	        dark_theme('enable');
	        break;
	    case '-2':
	    case 'dark-theme disable':
	        bot_msg = "disabling dark-theme";
	        dark_theme('disable');
	        break;

	    case '3':
	    case 'box-layout enable':
	        bot_msg = "enabling box-layout";
	        box_layout('enable');
	        break;
	    case '-3':
	    case 'box-layout disable':
	        bot_msg = "disabling box-layout";
	        box_layout('disable');
	        break;

	    case '4':
	    case 'left-sidebar enable':
	        bot_msg = "enabling st-blog-left-sidebar";
	        left_sidebar('enable');
	        break;
	    case '-4':
	    case 'left-sidebar disable':
	        bot_msg = "disabling st-blog-left-sidebar";
	        left_sidebar('disable');
	        break;

	    case '5':
	    case 'no-sidebar enable':
	        bot_msg = "enabling st-blog-no-sidebar";
	        no_sidebar('enable');
	        break;
	    case '-5':
	    case 'no-sidebar disable':
	        bot_msg = "disabling st-blog-no-sidebar";
	        no_sidebar('disable');
	        break;

	    case '6':
	    case 'big-logo enable':
	        bot_msg = "enabling big-logo";
	        big_logo('enable');
	        break;
	    case '-6':
	    case 'big-logo disable':
	        bot_msg = "type 7/8 or logo-left/logo-right enable";
	        // big_logo('disable');
	        break;

	    case '7':
	    case 'logo-left enable':
	        bot_msg = "enabling logo-left";
	        logo_left('enable');
	        break;
	    case '-7':
	    case 'logo-left disable':
	        bot_msg = "type 6/8 or big-logo/logo-right enable";
	        // logo_left('disable');
	        break;

	    case '8':
	    case 'logo-right enable':
	        bot_msg = "enabling logo-right";
	        logo_right('enable');
	        break;
	    case '-8':
	    case 'logo-right disable':
	        bot_msg = "type 6/7 or big-logo/logo-left enable";
	        // logo_right('disable');
	        break;

	    case '0':
	    case 'hide':
	        bot_msg = "minimizing";
	        jQuery('#frontend-customizer .control .minimize').trigger('click');
	        break;

	    default:
	    	bot_msg = "I'm still learning. Please type 'help' for now.";
	}

	return '<p class="text-right">'+bot_msg+'</p>';
}

function dark_theme($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('dark-theme');
	}
	else {
		jQuery('body').removeClass('dark-theme dark-theme-coloured');
	}
}

function dark_theme_coloured($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('dark-theme dark-theme-coloured');//.dark-theme-coloured requires .dark-theme
	}
	else {
		jQuery('body').removeClass('dark-theme-coloured');//if dark-theme-coloured is enabled
	}
}

function box_layout($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('box-layout');
	}
	else {
		jQuery('body').removeClass('box-layout');
	}
}

function left_sidebar($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('st-blog-left-sidebar');
	}
	else {
		jQuery('body').removeClass('st-blog-left-sidebar');
	}
}

function no_sidebar($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('st-blog-no-sidebar');
	}
	else {
		jQuery('body').removeClass('st-blog-no-sidebar');
	}
}

function big_logo($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('big-logo');
		jQuery('body').removeClass('logo-left logo-right');

		st_blog_head_search_form_position();
		alignment_and_padding();
	}
	/*else {
		jQuery('body').removeClass('big-logo');

		st_blog_head_search_form_position();
		alignment_and_padding();
	}*/
}

function logo_left($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('logo-left');
		jQuery('body').removeClass('big-logo logo-right');

		st_blog_head_search_form_position();
		alignment_and_padding();
	}
	/*else {
		jQuery('body').removeClass('logo-left');

		st_blog_head_search_form_position();
		alignment_and_padding();
	}*/
}


function logo_right($todo) {
	if($todo == 'enable') {
		jQuery('body').addClass('logo-right');
		jQuery('body').removeClass('big-logo logo-left');

		st_blog_head_search_form_position();
		alignment_and_padding();
	}
}
