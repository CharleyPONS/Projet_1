<?php

/**
 * Class who manage 
 */
class ContactManager
{
	
	public function __construct($db)
	{
		$this->setDb($db)
	}
}

public function add(Personnage $perso)
  {
    $req = $this->_db->prepare('INSERT INTO webagency(Name, email, Subject, Message) VALUES(:Name, :email, :Subject, :Message)');
    $req->bindValue(':nom', $perso->nom());
    $req->bindValue(':email', $perso->email());
    $req->bindValue(':Subject', $perso->Subject());
    $req->bindValue(':Message', $perso->Message());

    $req->execute();
    
    
    ]);
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

?>