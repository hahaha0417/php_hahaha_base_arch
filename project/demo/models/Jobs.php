<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Jobs
 *
 * @ORM\Table(name="jobs", indexes={@ORM\Index(name="jobs_queue_index", columns={"queue"})})
 * @ORM\Entity
 */
class Jobs
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
     * @ORM\Column(name="queue", type="string", length=255, nullable=false)
     */
    private $queue;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=0, nullable=false)
     */
    private $payload;

    /**
     * @var bool
     *
     * @ORM\Column(name="attempts", type="boolean", nullable=false)
     */
    private $attempts;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reserved_at", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $reservedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="available_at", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $availableAt;

    /**
     * @var int
     *
     * @ORM\Column(name="created_at", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createdAt;



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
     * Set queue.
     *
     * @param string $queue
     *
     * @return Jobs
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue.
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Set payload.
     *
     * @param string $payload
     *
     * @return Jobs
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get payload.
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set attempts.
     *
     * @param bool $attempts
     *
     * @return Jobs
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts.
     *
     * @return bool
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set reservedAt.
     *
     * @param int|null $reservedAt
     *
     * @return Jobs
     */
    public function setReservedAt($reservedAt = null)
    {
        $this->reservedAt = $reservedAt;

        return $this;
    }

    /**
     * Get reservedAt.
     *
     * @return int|null
     */
    public function getReservedAt()
    {
        return $this->reservedAt;
    }

    /**
     * Set availableAt.
     *
     * @param int $availableAt
     *
     * @return Jobs
     */
    public function setAvailableAt($availableAt)
    {
        $this->availableAt = $availableAt;

        return $this;
    }

    /**
     * Get availableAt.
     *
     * @return int
     */
    public function getAvailableAt()
    {
        return $this->availableAt;
    }

    /**
     * Set createdAt.
     *
     * @param int $createdAt
     *
     * @return Jobs
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
