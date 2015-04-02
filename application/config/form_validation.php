<?php
$config = array(
		'register' => array(
				array(
						'field' => 'name',
						'label' => 'name',
						'rules' => 'required'
				),
				
				array(
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'required'
				)
		),
		'email' => array(
				array(
						'field' => 'emailaddress',
						'label' => 'EmailAddress',
						'rules' => 'required|valid_email'
				),
				
		)
);