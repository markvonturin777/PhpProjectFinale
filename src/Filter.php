<?php
declare(strict_types=1);

namespace SimpleMVC;

class Filter
{
    public function isEmail(string $email)
    {
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		return true;
	}
	else{
		return false;
	}
    }
    public function isContent(string $content)
    {

	if(preg_match('/^[\w\s?]+$/', $content)) {
    		return true;
	}
	else{
		return false;
   	}
    }
}
