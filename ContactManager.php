<?php

/**
 * 
 */
class ContactManager
{
	private $_db;
  
	public function __construct($db)
	{
		$this->setDb($db);
	}


public function add(Contact $customer)
  {
    $req = $this->_db->prepare('INSERT INTO contact(Name, email, Subject, Message) VALUES(:Name, :email, :Subject, :Message)');
    $req->bindValue(':Name', $customer->Name());
    $req->bindValue(':email', $customer->email());
    $req->bindValue(':Subject', $customer->Subject());
    $req->bindValue(':Message', $customer->Message());

    $req->execute();
    
    
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>