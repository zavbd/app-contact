<?php
abstract class AbstractValidator
{
    protected $_value = '';
    protected $_filter = '';
    protected $_options = null;
    protected $_errorMessage = '';
    protected $_errorPrefix = '<p>';
    protected $_errorSufix = '</p>';

    // constructor 

    public function __construct($value, array $options = null)
    {
        $this->_value = $value;
        if (null !== $options)
        {
           $this -> setOptions($options);
        }
    }

    

    // get supplied value 

    public function getValue()
    {
        return $this -> _value;
    }

    

    // set validation options 

    public function setOptions(array $options)
    {
        if (empty($options))
        {
            throw new ValidatorException('Invalid options for the validator.');
        }
        $this -> _options = $options;
    }

    

    // get validation options 

    public function getOptions()
    {
        return $this -> _options;
    }

      

    // set the validation filter 

    public function setFilter($filter)
    {
        if (!is_string($filter))
        {
            throw new ValidatorException('Invalid filter for the validator.');
        }
        $this -> _filter = $filter;
    }
    

    // get the validation filter 

    public function getFilter()
    {
        return $this -> _filter;
    }

    

    // set the error message 

    public function setErrorMessage($errorMessage)
    {
        if (!is_string($errorMessage))
        {
            throw new ValidatorException('Invalid error message for the validator.');
        }
        $this -> _errorMessage = $errorMessage;
    }
    

    // get error message 

    public function getErrorMessage()
    {
        return $this -> _errorMessage;
    }

    // get formatted error string 

    public function getFormattedError()
    {
        return $this -> _errorPrefix . 'The value ' . $this -> getValue() . ' is incorrect. ' . $this -> getErrorMessage() . $this -> _errorSufix;
    }
    

    // validate the supplied value  

    public function validate()
    {
        //print_r($this -> getOptions());
        //echo $this -> getFilter().'<hr>';
        return filter_var($this -> getValue(), $this -> getFilter(), $this -> getOptions());
    }
    public function validateArray($data, $definetions)
    {
        //print_r($this -> getOptions());
        //echo $this -> getFilter().'<hr>';
        return filter_var($this -> getValue(), $this -> getFilter(), $this -> getOptions());
    }
}
?>