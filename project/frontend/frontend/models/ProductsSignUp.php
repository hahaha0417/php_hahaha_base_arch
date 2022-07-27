<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsSignUp
 *
 * @ORM\Table(name="products_sign_up", indexes={@ORM\Index(name="products_sign_up_products_id_foreign", columns={"products_id"})})
 * @ORM\Entity
 */
class ProductsSignUp
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true,"comment"="識別項"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"comment"="名稱"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false, options={"comment"="信箱"})
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false, options={"comment"="電話"})
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=255, nullable=false, options={"comment"="項目"})
     */
    private $item;

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
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="products_id", referencedColumnName="id")
     * })
     */
    private $products;


}
