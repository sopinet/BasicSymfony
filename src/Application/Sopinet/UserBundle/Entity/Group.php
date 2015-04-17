<?php
namespace Application\Sopinet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sopinet\UserBundle\Model\BaseGroup as BaseGroup;
#use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Entity User
 *
 * @ORM\Table("fos_user_group")
 * @ORM\Entity
 */
class Group extends BaseGroup
{

    /**
     * @var id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}
