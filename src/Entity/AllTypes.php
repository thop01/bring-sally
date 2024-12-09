<?php

namespace App\Entity;

use App\Repository\AllTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AllTypesRepository::class)]
class AllTypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stringtest = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $texttest = null;

    #[ORM\Column(nullable: true)]
    private ?bool $booleantest = null;

    #[ORM\Column(nullable: true)]
    private ?int $integertest = null;

    #[ORM\Column(nullable: true)]
    private ?float $floattest = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $arraytest = null;

    #[ORM\Column]
    private array $jsontest = [];

    #[ORM\Column(type: Types::OBJECT, nullable: true)]
    private ?object $objecttest = null;

    #[ORM\Column(type: Types::BINARY, nullable: true)]
    private $binarytest = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $blobtest = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datetimetest = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datetimetztest = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datetest = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $timetest = null;

    #[ORM\Column(nullable: true)]
    private ?\DateInterval $dateintervaltest = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $decimaltest = null;

    #[ORM\Column(type: Types::GUID, nullable: true)]
    private ?string $guidtest = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStringtekst(): ?string
    {
        return $this->stringtekst;
    }

    public function setStringtekst(?string $stringtekst): static
    {
        $this->stringtekst = $stringtekst;

        return $this;
    }

    public function getTexttest(): ?string
    {
        return $this->texttest;
    }

    public function setTexttest(?string $texttest): static
    {
        $this->texttest = $texttest;

        return $this;
    }

    public function isBooleantest(): ?bool
    {
        return $this->booleantest;
    }

    public function setBooleantest(?bool $booleantest): static
    {
        $this->booleantest = $booleantest;

        return $this;
    }

    public function getIntegertest(): ?int
    {
        return $this->integertest;
    }

    public function setIntegertest(?int $integertest): static
    {
        $this->integertest = $integertest;

        return $this;
    }

    public function getFloattest(): ?float
    {
        return $this->floattest;
    }

    public function setFloattest(?float $floattest): static
    {
        $this->floattest = $floattest;

        return $this;
    }

    public function getArraytest(): ?array
    {
        return $this->arraytest;
    }

    public function setArraytest(?array $arraytest): static
    {
        $this->arraytest = $arraytest;

        return $this;
    }

    public function getJsontest(): array
    {
        return $this->jsontest;
    }

    public function setJsontest(array $jsontest): static
    {
        $this->jsontest = $jsontest;

        return $this;
    }

    public function getObjecttest(): ?object
    {
        return $this->objecttest;
    }

    public function setObjecttest(?object $objecttest): static
    {
        $this->objecttest = $objecttest;

        return $this;
    }

    public function getBinarytest()
    {
        return $this->binarytest;
    }

    public function setBinarytest($binarytest): static
    {
        $this->binarytest = $binarytest;

        return $this;
    }

    public function getBlobtest()
    {
        return $this->blobtest;
    }

    public function setBlobtest($blobtest): static
    {
        $this->blobtest = $blobtest;

        return $this;
    }

    public function getDatetimetest(): ?\DateTimeInterface
    {
        return $this->datetimetest;
    }

    public function setDatetimetest(?\DateTimeInterface $datetimetest): static
    {
        $this->datetimetest = $datetimetest;

        return $this;
    }

    public function getDatetimetztest(): ?\DateTimeInterface
    {
        return $this->datetimetztest;
    }

    public function setDatetimetztest(?\DateTimeInterface $datetimetztest): static
    {
        $this->datetimetztest = $datetimetztest;

        return $this;
    }

    public function getDatetest(): ?\DateTimeInterface
    {
        return $this->datetest;
    }

    public function setDatetest(?\DateTimeInterface $datetest): static
    {
        $this->datetest = $datetest;

        return $this;
    }

    public function getTimetest(): ?\DateTimeInterface
    {
        return $this->timetest;
    }

    public function setTimetest(?\DateTimeInterface $timetest): static
    {
        $this->timetest = $timetest;

        return $this;
    }

    public function getDateintervaltest(): ?\DateInterval
    {
        return $this->dateintervaltest;
    }

    public function setDateintervaltest(?\DateInterval $dateintervaltest): static
    {
        $this->dateintervaltest = $dateintervaltest;

        return $this;
    }

    public function getDecimaltest(): ?string
    {
        return $this->decimaltest;
    }

    public function setDecimaltest(?string $decimaltest): static
    {
        $this->decimaltest = $decimaltest;

        return $this;
    }

    public function getGuidtest(): ?string
    {
        return $this->guidtest;
    }

    public function setGuidtest(?string $guidtest): static
    {
        $this->guidtest = $guidtest;

        return $this;
    }
}
