<?php
class FloatValidator extends AbstractValidator
{

    protected $_filter = FILTER_VALIDATE_FLOAT;  

    protected $_errorMessage = 'Please enter a float value.'; 

}
?>