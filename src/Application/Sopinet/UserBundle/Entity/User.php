<?php
 namespace Application\Sopinet\UserBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Sopinet\UserBundle\Model\BaseUser as BaseUser;

 #use FOS\UserBundle\Entity\User as BaseUser;

 /**
 * Entity User
 *
 * @ORM\Table("fos_user_user")
 * @ORM\Entity()
 */
 class User extends BaseUser
 {

	/**
	 * @var id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	 protected $id;

     // Extend HERE!
     // Generate set/get: php app/console doctrine:generate:entities ApplicationSopinetUserBundle

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
