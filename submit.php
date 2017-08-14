<?php
require_once('conn.php');
	$errors = array(); 
    $form_data = array(); 
     /* Validate the form on server side */
    if (empty($_POST['name'])) { 
        $errors['name'] = 'Name cannot be blank';
    }
    if (empty($_POST['comments'])) { 
        $errors['comments'] = 'Comments cannot be blank';
    }   
    if (!empty($errors)) { 
    	$form_data['success'] = false;
    	$form_data['errors']  = $errors;
    } else {
		///Submit to Database
	$query = sprintf("INSERT INTO `testComments` (`name`,`comment` ,`created`) VALUES ('%s', '%s', NOW())",
//					mysqli_real_escape_string($_POST['name']),
//					mysqli_real_escape_string($_POST['comments'])
                     ($_POST['name']),
					($_POST['comments'])
    );
if (mysqli_query($mysqli,$query)) {
	    $form_data['success'] = true;
    	$form_data['posted'] = 'Thanks for Submitting';
		}else{
		$form_data['success'] = false;
    	$form_data['posted'] = 'Database Error!!!';
		}
    }
echo json_encode($form_data);