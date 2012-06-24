<?php
class EmailValidator extends AbstractValidator
{

    protected $_filter = FILTER_VALIDATE_EMAIL;

    protected $_errorMessage = 'Please enter a valid email address.';

}
?>