<?php

/**
 * 
 */
class ContactManager
{
	private $_db;
  
	public function __construct($db)//pk ne pas mettre PDO en param
	{
		$this->setDb($db);
	}


public function add(Contact $customer)
  {
    $req = $this->_db->prepare('INSERT INTO contact(Name, email, Subject, Message) VALUES(:Name, :email, :Subject, :Message)');
    $req->bindValue(':Name', $customer->Name());// on est bien d'accord que les fonction appeles sont les getter qui eux meme ce font retourner des vaeurs par les setter eux meme avec des valeurs retournes par la fonction hydrate
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