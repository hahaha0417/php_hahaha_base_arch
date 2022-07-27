<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccessTokens
 *
 * @ORM\Table(name="personal_access_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="personal_access_tokens_token_unique", columns={"token"})}, indexes={@ORM\Index(name="personal_access_tokens_tokenable_type_tokenable_id_index", columns={"tokenable_type", "tokenable_id"})})
 * @ORM\Entity
 */
class PersonalAccessTokens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenable_type", type="string", length=255, nullable=false)
     */
    private $tokenableType;

    /**
     * @var int
     *
     * @ORM\Column(name="tokenable_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $tokenableId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=64, nullable=false)
     */
    private $token;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abilities", type="text", length=65535, nullable=true)
     */
    private $abilities;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_used_at", type="datetime", nullable=true)
     */
    private $lastUsedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;



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
     * Set tokenableType.
     *
     * @param string $tokenableType
     *
     * @return PersonalAccessTokens
     */
    public function setTokenableType($tokenableType)
    {
        $this->tokenableType = $tokenableType;

        return $this;
    }

    /**
     * Get tokenableType.
     *
     * @return string
     */
    public function getTokenableType()
    {
        return $this->tokenableType;
    }

    /**
     * Set tokenableId.
     *
     * @param int $tokenableId
     *
     * @return PersonalAccessTokens
     */
    public function setTokenableId($tokenableId)
    {
        $this->tokenableId = $tokenableId;

        return $this;
    }

    /**
     * Get tokenableId.
     *
     * @return int
     */
    public function getTokenableId()
    {
        return $this->tokenableId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return PersonalAccessTokens
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
     * Set token.
     *
     * @param string $token
     *
     * @return PersonalAccessTokens
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set abilities.
     *
     * @param string|null $abilities
     *
     * @return PersonalAccessTokens
     */
    public function setAbilities($abilities = null)
    {
        $this->abilities = $abilities;

        return $this;
    }

    /**
     * Get abilities.
     *
     * @return string|null
     */
    public function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * Set lastUsedAt.
     *
     * @param \DateTime|null $lastUsedAt
     *
     * @return PersonalAccessTokens
     */
    public function setLastUsedAt($lastUsedAt = null)
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    /**
     * Get lastUsedAt.
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt()
    {
        return $this->lastUsedAt;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return PersonalAccessTokens
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return PersonalAccessTokens
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
