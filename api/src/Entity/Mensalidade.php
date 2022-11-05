<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MensalidadeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MensalidadeRepository::class)]
#[ApiResource]
class Mensalidade
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $userid = null;

    #[ORM\Column]
    private ?int $valor = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dataInicio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getDataInicio(): ?\DateTimeInterface
    {
        return $this->dataInicio;
    }

    public function setDataInicio(?\DateTimeInterface $dataInicio): self
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }
}
