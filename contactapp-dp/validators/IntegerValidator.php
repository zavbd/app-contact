<?php
class IntegerValidator extends AbstractValidator 

{

    protected $_filter = FILTER_VALIDATE_INT; 

    protected $_errorMessage = 'Please enter an integer value.'; 

}
?>