<?php

namespace TNTExpressConnect\Tracking\XSD;

/**
 * Class representing UsernameTokenStructureType
 *
 *
 * XSD Type: UsernameTokenStructure
 */
class UsernameTokenStructureType
{

    /**
     * @property string $username
     */
    private $username = null;

    /**
     * @property
     * \TNTExpressConnect\Tracking\XSD\UsernameTokenStructureType\PasswordAType
     * $password
     */
    private $password = null;

    /**
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return \TNTExpressConnect\Tracking\XSD\UsernameTokenStructureType\PasswordAType
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param \TNTExpressConnect\Tracking\XSD\UsernameTokenStructureType\PasswordAType
     * $password
     * @return self
     */
    public function setPassword(\TNTExpressConnect\Tracking\XSD\UsernameTokenStructureType\PasswordAType $password)
    {
        $this->password = $password;
        return $this;
    }


}

