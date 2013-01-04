<?php
/**
 * WebMakers.me
 * The next BIG resource for web makers in the middle east is coming!
 */

// Turn off all error reporting, uncomment the next line on production only.
// error_reporting(0);

// Include functions file
include_once( 'src/php/functions.php' );

// Set default timezone
date_default_timezone_set('UTC');

// Variable to check is email submitted and inserted or not
$email_inserted = FALSE;

// Initialize PDO
$db = new PDO('sqlite:src/db.sqlite');

// If subscribe form submited
if( isset($_POST['subscribe']) && ! empty($_POST['email']) )
{
	try {
		$insert_statement = $db->prepare('INSERT INTO `mail_list` (`email`, `ip`, `added_on`) VALUES (:email, :ip, :added_on)');
		// print_r($db->errorInfo());
		$insert_data = array(
			':email'	=> get_post('email'), 
			':ip'		=> get_client_ip(), 
			'added_on'	=> time()
		);

		if( $insert_statement->execute($insert_data) ) {
			$email_inserted = TRUE;
		}

		$insert_statement = NULL;

	}
	catch(PDOException $error) {
		// Print PDOException message
		echo $error->getMessage();
	}
}

// Count how many emails we have
$num_emails = 0;
if( $count_query = $db->query('SELECT COUNT(`id`) FROM `mail_list`') ) {
	$num_emails = $count_query->fetchColumn();
	$count_query = NULL;
}

// Close DB connections
$db = NULL;

// Display site template
include_once('src/template.php');
?>