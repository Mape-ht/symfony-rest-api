<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Annotation\ApiFilter;


/**
 * @ApiResource(
 *      normalizationContext={"groups"={"read:operation"}},
 *      collectionOperations={"get"},
 *      itemOperations={"get"}
 * )
 * @ApiFilter(SearchFilter::class,properties={"compte": "exact"})
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

    /**
     * @ORM\ManyToOne(targetEntity=compte::class, inversedBy="operations")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read:operation"})
     */
    private $compte;

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

    public function getCompte(): ?compte
    {
        return $this->compte;
    }

    public function setCompte(?compte $compte): self
    {
        $this->compte = $compte;

        return $this;
    }
}
