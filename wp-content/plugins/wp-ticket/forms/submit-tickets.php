<div class="form-alerts">
<?php
echo (isset($zf_error) ? $zf_error : (isset($error) ? $error : ''));
$form_list = get_option('wp_ticket_com_glob_forms_list');
$form_variables = $form_list['submit_tickets'];
?>
</div>
<fieldset>
<div class="submit_tickets-btn-fields">
<!-- submit_tickets Form Attributes -->
<div class="submit_tickets_attributes">
 
<div id="row1" class="row">
<!-- Taxonomy input-->
<?php if ($form_variables['ticket_topic']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['ticket_topic']['size']; ?>">
<div class="form-group">
<label id="label_ticket_topic" class="control-label" for="ticket_topic">
<?php _e('Topic', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Topics are the categories for tickets.', 'wp-ticket-com'); ?>" id="info_ticket_topic" class="helptip"><span class="field-icons icons-help"></span></a>
</span>
</label>
<?php echo $ticket_topic; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row2" class="row">
<!-- text input-->
<?php if ($form_variables['emd_ticket_first_name']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_first_name']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_emd_ticket_first_name" class="control-label" for="emd_ticket_first_name">
<?php _e('First Name', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a href="#" data-html="true" data-toggle="tooltip" title="<?php _e('First Name field is required', 'wp-ticket-com'); ?>" id="info_emd_ticket_first_name" class="helptip">
<span class="field-icons icons-required"></span>
</a>
</span>
</label>
<?php echo $emd_ticket_first_name; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row3" class="row">
<!-- text input-->
<?php if ($form_variables['emd_ticket_last_name']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_last_name']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_emd_ticket_last_name" class="control-label" for="emd_ticket_last_name">
<?php _e('Last Name', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
</span>
</label>
<?php echo $emd_ticket_last_name; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row4" class="row">
<!-- text input-->
<?php if ($form_variables['emd_ticket_email']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_email']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_emd_ticket_email" class="control-label" for="emd_ticket_email">
<?php _e('Email', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Our responses to your ticket will be sent to this email address.', 'wp-ticket-com'); ?>" id="info_emd_ticket_email" class="helptip"><span class="field-icons icons-help"></span></a>
<a href="#" data-html="true" data-toggle="tooltip" title="<?php _e('Email field is required', 'wp-ticket-com'); ?>" id="info_emd_ticket_email" class="helptip">
<span class="field-icons icons-required"></span>
</a>
</span>
</label>
<?php echo $emd_ticket_email; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row5" class="row">
<!-- text input-->
<?php if ($form_variables['blt_title']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['blt_title']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_blt_title" class="control-label" for="blt_title">
<?php _e('Assunto', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Ideally, a question title should be a question. It\'s important that the question title is specific and has at least some meaning with no other information. A question such as "Why doesn\'t this work?" makes absolutely no sense without the rest of the question.', 'wp-ticket-com'); ?>" id="info_blt_title" class="helptip"><span class="field-icons icons-help"></span></a>
<a href="#" data-html="true" data-toggle="tooltip" title="<?php _e('É necessário preencher o assunto.', 'wp-ticket-com'); ?>" id="info_blt_title" class="helptip">
<span class="field-icons icons-required"></span>
</a>
</span>
</label>
<?php echo $blt_title; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row6" class="row">
<!-- wysiwyg input-->
<?php if ($form_variables['blt_content']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['blt_content']['size']; ?>">
<div class="form-group">
<label id="label_blt_content" class="control-label" for="blt_content">
<?php _e('Message', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Describe the problem or question. Include all necessary details but no unnecessary ones. A short description is easier to understand and will save the reviewer time. Please avoid asking multiple questions in one ticket. Open a separate ticket so that we can better answer your question.', 'wp-ticket-com'); ?>" id="info_blt_content" class="helptip"><span class="field-icons icons-help"></span></a>
<a href="#" data-html="true" data-toggle="tooltip" title="<?php _e('Message field is required', 'wp-ticket-com'); ?>" id="info_blt_content" class="helptip">
<span class="field-icons icons-required"></span>
</a>
</span>
</label>
<?php echo $blt_content; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row7" class="row">
<!-- text input-->
<?php if ($form_variables['emd_ticket_phone']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_phone']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_emd_ticket_phone" class="control-label" for="emd_ticket_phone">
<?php _e('Phone', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Please enter a phone number in case we need to contact you.', 'wp-ticket-com'); ?>" id="info_emd_ticket_phone" class="helptip"><span class="field-icons icons-help"></span></a>
</span>
</label>
<?php echo $emd_ticket_phone; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row8" class="row">
<!-- file input-->
<?php if ($form_variables['emd_ticket_attachment']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_attachment']['size']; ?>">
<?php _e('Attachments', 'wp-ticket-com'); ?>
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('Attach related files to the ticket.', 'wp-ticket-com'); ?>" id="info_emd_ticket_attachment" class="helptip"><span class="field-icons icons-help"></span></a>
<div class="form-group">
<?php echo $emd_ticket_attachment; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row9" class="row">
<!-- Taxonomy input-->
<?php if ($form_variables['ticket_priority']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['ticket_priority']['size']; ?>">
<div class="form-group">
<label id="label_ticket_priority" class="control-label" for="ticket_priority">
<?php _e('Priority', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;">
<a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('When you create a ticket, you should prioritize the ticket based on the scope and impact of the request.', 'wp-ticket-com'); ?>" id="info_ticket_priority" class="helptip"><span class="field-icons icons-help"></span></a>
</span>
</label>
<?php echo $ticket_priority; ?>
</div>
</div>
<?php
} ?>
</div>
<div id="row10" class="row">
<!-- datetime-->
<?php if ($form_variables['emd_ticket_duedate']['show'] == 1) { ?>
<div class="col-md-<?php echo $form_variables['emd_ticket_duedate']['size']; ?> woptdiv">
<div class="form-group">
<label id="label_emd_ticket_duedate" class="control-label" for="emd_ticket_duedate">
<?php _e('Due', 'wp-ticket-com'); ?>
<span style="display: inline-flex;right: 0px; position: relative; top:-6px;"> <a data-html="true" href="#" data-toggle="tooltip" title="<?php _e('The due date of the ticket', 'wp-ticket-com'); ?>" id="info_emd_ticket_duedate" class="helptip"><span class="field-icons icons-help"></span></a>
 </span>
</label>
<?php echo $emd_ticket_duedate; ?>
</div>
</div>
<?php
} ?>
</div>
 
 
 
</div><!--form-attributes-->
<?php if ($show_captcha == 1) { ?>
<div class="row">
<div class="col-xs-12">
<div id="captcha-group" class="form-group">
<?php echo $captcha_image; ?>
<label style="padding:0px;" id="label_captcha_code" class="control-label" for="captcha_code">
<a id="info_captcha_code_help" class="helptip" data-html="true" data-toggle="tooltip" href="#" title="<?php _e('Please enter the characters with black color in the image above.', 'wp-ticket-com'); ?>">
<span class="field-icons icons-help"></span>
</a>
<a id="info_captcha_code_req" class="helptip" title="<?php _e('Security Code field is required', 'wp-ticket-com'); ?>" data-toggle="tooltip" href="#">
<span class="field-icons icons-required"></span>
</a>
</label>
<?php echo $captcha_code; ?>
</div>
</div>
</div>
<?php
} ?>
<?php wp_nonce_field('submit_tickets', 'submit_tickets_nonce'); ?>
<input type="hidden" name="form_name" id="form_name" value="submit_tickets">
<!-- Button -->
<div class="row">
<div class="col-md-12">
<div class="wpas-form-actions">
<?php echo $singlebutton_submit_tickets; ?>
</div>
</div>
</div>
</div><!--form-btn-fields-->
</fieldset>