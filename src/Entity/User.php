<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nation;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $notif;

    public function getId(): ?int {
        return $this->id;
    }

    public function getLogin(): ?string {
        return $this->login;
    }

    public function setLogin(string $login): self {
        $this->login = $login;
        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(string $password): self {
        $this->password = $password;
        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): self {
        $this->description = $description;
        return $this;
    }

    public function getAvatar(): ?string {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self {
        $this->avatar = $avatar;
        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self {
        $this->birthday = $birthday;
        return $this;
    }

    public function getNation(): ?string {
        return $this->nation;
    }

    public function setNation(?string $nation): self {
        $this->nation = $nation;
        return $this;
    }

    public function getContact(): ?string {
        return $this->contact;
    }

    public function setContact(string $contact): self {
        $this->contact = $contact;
        return $this;
    }

    public function getNotif(): ?string {
        return $this->notif;
    }

    public function setNotif(string $notif): self {
        $this->notif = $notif;
        return $this;
    }
    
}
