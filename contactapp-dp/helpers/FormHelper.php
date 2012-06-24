<?php
class FormHelper

{
    protected $_validators = array();
    
    protected $_errors = array();
    
    // add a validator
    
    public function addValidator(AbstractValidator $validator)
    {
        $this -> _validators[] = $validator;
        return $this;
    }

    // get all the validators

    public function getValidators()
    {
        return !empty($this -> _validators) ? $this -> _validators : null;
    }
    // validate inputted data

    public function validate()
    {
        $validators = $this -> getValidators();
        if (null !== $validators)
        {
            foreach ($validators as $validator)
            {
                if (!$validator -> validate())
                {
                    $this -> _errors[] = $validator -> getFormattedError();
                }
            }
        }
        return empty($this -> _errors) ? true : false;
    }
    
    // get validation errors as an array
    
    public function getErrors()
    {
        return $this -> _errors;
    }
    
    // get validation errors as a string 

    public function getErrorString()
    {
        $errors = $this -> getErrors();
        return !empty($errors) ? implode('', $errors) : '';
    }
    
    // clear state of the form helper 

    public function clear()
    {
        $this -> _validators = array();
        $this -> _errors = array(); 
    }
}
?>