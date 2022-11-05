<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DoacoesRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: DoacoesRepository::class)]
#[ApiResource]
class Doacoes
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity: Doador::class, inversedBy: 'id')]
    private ?int $userid = null;

    public function __construct()
    {
        $this->userid = new ArrayCollection();
    }

    #[ORM\Column]
    private ?int $valor = null;

    #[ORM\Column(length: 255)]
    private ?string $forma_pagamento = null;

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

    public function getFormaPagamento(): ?string
    {
        return $this->forma_pagamento;
    }

    public function setFormaPagamento(string $forma_pagamento): self
    {
        $this->forma_pagamento = $forma_pagamento;

        return $this;
    }
}
