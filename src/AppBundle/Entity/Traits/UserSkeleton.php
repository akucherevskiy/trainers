<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 27.01.16
 * Time: 22:24
 */

namespace AppBundle\Entity\Traits;

trait UserSkeleton
{
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */

    protected $isAdmin;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getIsAdmin(){}
    public function setIsAdmin($isAdmin){}
    public function getAge(){}
    public function setAge($age){}
    public function getSex(){}
    public function setSex($sex){}
}