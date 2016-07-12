<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.375
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Laboratorios GEDIC - Bienvenidos Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'email' => array(
		'from' => 'info@wesdap.com',
		'to' => 'info@wesdap.com'
	),
	'fields' => array(
		'custom_U340' => array(
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Nombre\' is required.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U346' => array(
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U360' => array(
			'type' => 'string',
			'label' => 'Teléfono',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Teléfono\' is required.'
			)
		),
		'custom_U354' => array(
			'type' => 'string',
			'label' => 'Asunto',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Asunto\' is required.'
			)
		)
	)
);

process_form($form);
?>
