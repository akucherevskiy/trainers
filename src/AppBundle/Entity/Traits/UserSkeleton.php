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
     * @ORM\Column(type="string", length=50)
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
     * @ORM\Column(type="string", length=50)
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
    protected $surname;

    /**
     * @ORM\Column(type="integer", length=2, nullable=true)
     */
    protected $age;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     * @Assert\NotBlank(message="Please enter your sex", groups={"Registration", "Profile"})
     */
    protected $sex;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surname;
    }

    /**
     * @param $surname
     * @return $this
     */
    public function setSurName($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param $isAdmin
     * @return $this
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param $sex
     * @return $this
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }
}