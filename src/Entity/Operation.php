<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *      collectionOperations={"get"},
 *      itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass=OperationRepository::class)
 */
class Operation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $typeoperation;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $typefrais;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantfrais;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeoperation(): ?\DateTimeInterface
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(\DateTimeInterface $typeoperation): self
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTypefrais(): ?string
    {
        return $this->typefrais;
    }

    public function setTypefrais(string $typefrais): self
    {
        $this->typefrais = $typefrais;

        return $this;
    }

    public function getMontantfrais(): ?int
    {
        return $this->montantfrais;
    }

    public function setMontantfrais(int $montantfrais): self
    {
        $this->montantfrais = $montantfrais;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
