<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"read:operation"}},
 *      collectionOperations={"get"},
 *      itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass=OperationRepository::class)
 *
 */
class Operation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"read:operation"})
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Groups({"read:operation"})
     */
    private $typeoperation;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"read:operation"})
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=55)
     * @Groups({"read:operation"})
     */
    private $typefrais;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"read:operation"})
     */
    private $montantfrais;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"read:operation"})
     */
    private $solde;

    /**
     * @ORM\Column(type="date")
     * @Groups({"read:operation"})
     */
    private $dateoperation;

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

    public function getDateoperation(): ?\DateTimeInterface
    {
        return $this->dateoperation;
    }

    public function setDateoperation(\DateTimeInterface $dateoperation): self
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }
}
