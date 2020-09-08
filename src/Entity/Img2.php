<?php

namespace App\Entity;

use App\Repository\Img2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Img2Repository::class)
 */
class Img2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $string;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?int
    {
        return $this->string;
    }

    public function setString(int $string): self
    {
        $this->string = $string;

        return $this;
    }

    public function getImg3(): ?string
    {
        return $this->img3;
    }

    public function setImg3(string $img3): self
    {
        $this->img3 = $img3;

        return $this;
    }
}
