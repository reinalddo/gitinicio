<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.375
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Form Medicos Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'email' => array(
		'from' => 'arkieta@hotmail.com',
		'to' => 'arkieta@hotmail.com'
	),
	'fields' => array(
		'custom_U1326' => array(
			'type' => 'string',
			'label' => 'Nombre de Médico',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Nombre de Médico\' is required.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Apellidos',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Apellidos\' is required.',
				'format' => 'Field \'Apellidos\' has an invalid email.'
			)
		),
		'custom_U1331' => array(
			'type' => 'string',
			'label' => 'Teléfono Local',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1335' => array(
			'type' => 'string',
			'label' => 'Teléfono Móvil',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Teléfono Móvil\' is required.'
			)
		),
		'custom_U1339' => array(
			'type' => 'string',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Correo electrónico\' is required.'
			)
		),
		'custom_U1343' => array(
			'type' => 'string',
			'label' => 'Especialidad',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Especialidad\' is required.'
			)
		),
		'custom_U1367' => array(
			'type' => 'string',
			'label' => 'Calle',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Calle\' is required.'
			)
		),
		'custom_U1371' => array(
			'type' => 'string',
			'label' => 'Ciudad',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Ciudad\' is required.'
			)
		),
		'custom_U1375' => array(
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U1379' => array(
			'type' => 'string',
			'label' => 'Zip code',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Zip code\' is required.'
			)
		)
	)
);

process_form($form);
?>
