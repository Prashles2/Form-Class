## Read me

This is just a simple class to simplify making forms in PHP.

Sample usage is in form.php

### Calling the class

Instanciating the class, there are three optional parameters. __$action__, __$method__ and __$enctype__.
By default, $action = NULL, $method = 'POST' and $enctype = NULL.
And error will be thrown if the $method is not set to POST and an enctype is set.

### Executing

__$form->show()__ will return the finished form. 

### Multiple forms

For multiple forms, you'll need multiple instances of the class.

### Usage

Below is some sample usage:

	$form = new Form();

	$form->label('Username: ');
	$form->input('Username');

	$form->label('Password: ');
	$form->input('password');

	$form->submit();

	echo $form->show()