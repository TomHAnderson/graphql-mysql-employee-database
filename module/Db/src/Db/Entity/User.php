<?php

namespace Db\Entity;

use Zend\Stdlib\ArraySerializableInterface;
use ZF\OAuth2\Doctrine\Entity\UserInterface;
use ZF\OAuth2\Doctrine\Permissions\Acl\Role\ProviderInterface;

/**
 * User
 */
class User implements
    ProviderInterface,
    UserInterface,
    ArraySerializableInterface
{
    // ArraySerizableInterface is used for OAuth2
    public function getArrayCopy()
    {
        return [
            'id' => $this->getId(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
        ];
    }

    public function exchangeArray(array $data)
    {
        // Not needed for OAuth2
    }

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $client;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accessToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authorizationCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refreshToken;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
        $this->accessToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authorizationCode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->refreshToken = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add role.
     *
     * @param \Db\Entity\Role $role
     *
     * @return User
     */
    public function addRole(\Db\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role.
     *
     * @param \Db\Entity\Role $role
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRole(\Db\Entity\Role $role)
    {
        return $this->role->removeElement($role);
    }

    /**
     * Get role.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add client.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\Client $client
     *
     * @return User
     */
    public function addClient(\ZF\OAuth2\Doctrine\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\Client $client
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeClient(\ZF\OAuth2\Doctrine\Entity\Client $client)
    {
        return $this->client->removeElement($client);
    }

    /**
     * Get client.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add accessToken.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\AccessToken $accessToken
     *
     * @return User
     */
    public function addAccessToken(\ZF\OAuth2\Doctrine\Entity\AccessToken $accessToken)
    {
        $this->accessToken[] = $accessToken;

        return $this;
    }

    /**
     * Remove accessToken.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\AccessToken $accessToken
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAccessToken(\ZF\OAuth2\Doctrine\Entity\AccessToken $accessToken)
    {
        return $this->accessToken->removeElement($accessToken);
    }

    /**
     * Get accessToken.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Add authorizationCode.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\AuthorizationCode $authorizationCode
     *
     * @return User
     */
    public function addAuthorizationCode(\ZF\OAuth2\Doctrine\Entity\AuthorizationCode $authorizationCode)
    {
        $this->authorizationCode[] = $authorizationCode;

        return $this;
    }

    /**
     * Remove authorizationCode.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\AuthorizationCode $authorizationCode
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAuthorizationCode(\ZF\OAuth2\Doctrine\Entity\AuthorizationCode $authorizationCode)
    {
        return $this->authorizationCode->removeElement($authorizationCode);
    }

    /**
     * Get authorizationCode.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Add refreshToken.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\RefreshToken $refreshToken
     *
     * @return User
     */
    public function addRefreshToken(\ZF\OAuth2\Doctrine\Entity\RefreshToken $refreshToken)
    {
        $this->refreshToken[] = $refreshToken;

        return $this;
    }

    /**
     * Remove refreshToken.
     *
     * @param \ZF\OAuth2\Doctrine\Entity\RefreshToken $refreshToken
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRefreshToken(\ZF\OAuth2\Doctrine\Entity\RefreshToken $refreshToken)
    {
        return $this->refreshToken->removeElement($refreshToken);
    }

    /**
     * Get refreshToken.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }
}
