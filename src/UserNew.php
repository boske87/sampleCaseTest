<?php
namespace Src;

use Src\PDO\Database;
use UserAuth\UserInterface;

class UserNew implements UserInterface
{
    protected $db;
    private $username;
    private $password;
    private $roles;
    public $lang;
    protected $userID;
    protected $userInfo;


    protected $table_users = 'users';


    /**
     * Initiates essential objects
     * @param Database $db
     * @param string $language
     */
    public function __construct(Database $db)
    {
        $this->db = $db;

    }


    /**
     * @param User $user
     */
    public function getUserById(User $user){
        $this->db->select('SELECT users.name FROM users WHERE users.Id = ?', array($user->id));

    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }


    /**
     * Returns the username .
     *
     * @return string The username
     */

    public function getUsername()
    {
        return $this->username;
    }

}
