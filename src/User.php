<?php
namespace Src;


use DateTimeImmutable;

class User
{

    private $username;
    private $password;
    private $enabled;
    private $userType;
    private $userGroup;
    private $roles;
    private $mail;
    private $createTime;
    private $userId;
    private $userAccountNonLocked;


    /**
     * User constructor.
     * @param null|string $username
     * @param null|string $password
     * @param array $roles
     * @param bool $enabled
     * @param null|string $userType
     * @param null|string $userGroup
     */
    public function __construct(?string $username, ?string $password, array $roles = array(), bool $enabled = true, bool $userAccountNonLocked = true)
    {
        if ('' === $username || null === $username) {
            throw new \InvalidArgumentException('The username cannot be empty.');
        }
        $this->username = $username;
        $this->password = $password;
        $this->enabled = $enabled;
        $this->roles = $roles;
        $this->userAccountNonLocked = $userAccountNonLocked;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getUsername();
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


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * @return string The password
     */

    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Returns the mail.
     *
     * @return string The mail
     */

    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $mail
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this->mail;
    }


    //send Mail - pseudo code
    public function sendMail(Mail $mail): void {
        // sends the mail
        // ...
        try {
            $mail->send($this->mail);
        } catch (\Exception $e) {
            echo $e->getMessage(), "\n";
        }
    }

    /**
     * @param DateTimeImmutable $createTime
     */
    public function setCreateTime(DateTimeImmutable $createTime) {
        $this->createTime = $createTime;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getCreateTime(): DateTimeImmutable {
        return $this->createTime;
    }


    public function isUserAccountNonLocked()
    {
        return $this->userAccountNonLocked;
    }

}
