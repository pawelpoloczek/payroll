<?php

declare(strict_types=1);

namespace App\Infrastructure\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\UuidInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="department")
 */
class Department
{
    /**
     * @var UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
     */
    private UuidInterface $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private string $bonusType;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private int $bonusValue;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=3)
     */
    private string $bonusCurrency;

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBonusType(): string
    {
        return $this->bonusType;
    }

    /**
     * @param string $bonusType
     */
    public function setBonusType(string $bonusType): void
    {
        $this->bonusType = $bonusType;
    }

    /**
     * @return int
     */
    public function getBonusValue(): int
    {
        return $this->bonusValue;
    }

    /**
     * @param int $bonusValue
     */
    public function setBonusValue(int $bonusValue): void
    {
        $this->bonusValue = $bonusValue;
    }

    /**
     * @return string
     */
    public function getBonusCurrency(): string
    {
        return $this->bonusCurrency;
    }

    /**
     * @param string $bonusCurrency
     */
    public function setBonusCurrency(string $bonusCurrency): void
    {
        $this->bonusCurrency = $bonusCurrency;
    }
}