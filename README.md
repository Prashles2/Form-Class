## Read me

This is just a simple class to simplify making forms in PHP.

Sample usage is in form.php

### Calling the class

Instanciating the class, there are three optional parameters. __$action__, __$method__ and __enctype__.
By default, $action = NULL, $method = 'POST' and $enctype = NULL.
And error will be thrown if the $method is not set to POST and an enctype is set.