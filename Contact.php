<?php

/**
 * Get and set the Contact Value
 */
class Contact 

	Private $_id
			$_Name,
			$_email,
			$_Subject,
			$_Message;
	
	function __construct($data)
	{
		$this->hydrate($data);
	}

	public function hydrate($data)
	{
		foreach ($data as $key => $value) {
			$method = 'set' . ucfirst($key);

			if (method_exists($this, $method)) {
				$this->$method($value)			}
		}
	}

	public function id()
	{
		return $this->id;
	}

	public function Name()
	{
		return $this->_Name;
	}

	public function email()
	{
		return $this->_email;
	}

	public function Subject()
	{
		return $this->_Subject;
	}

	public function Message()
	{
		return $this->_Message;
	}

	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0)
    {
      $this->_id = $id;
    }

	}

	public function setName($name)
	{
		
		if (is_string($nom)) {
			$this->_nom = $nom;
		}
	}

	public function setemail($email)
	{
		if(preg_match("#^[a-z0-9._-]+@{1}[a-z0-9]{2,}.[a-z]{2,4}$#", $email))
		{
			$this->_email = $email;
		}
	}

	public function setSubject($subject)
	{
		if (is_string($subject)) {
			$this->_Subject = $setSubject;
		}
	}

	public function setMessage($message)
	{
		if (is_string($message)) {
			$this->_Message = $message;
		}
	}




}