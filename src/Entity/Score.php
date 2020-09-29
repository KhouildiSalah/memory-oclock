<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $Score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?\DateTimeInterface
    {
        return $this->Score;
    }

    public function setScore(\DateTimeInterface $Score): self
    {
        $this->Score = $Score;

        return $this;
    }
}
