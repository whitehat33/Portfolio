<?php

namespace App\Entity;



use Symfony\Component\Uid\Factory\UuidFactory;

class Project
{
    private string $id;
    private string $title;
    private string $img;
    private string $description;
    private bool $isDeveloping;
    private \DateTime $createdOn;
    private \DateTime $updatedOn;

    public function  __construct(string $title, string $description, string $img, bool $isDeveloping, private readonly UuidFactory $uuidFactory)
    {
        $this->id = $this->uuidFactory->create()->toRfc4122();
        $this->title = $title;
        $this->img = $img;
        $this->description = $description;
        $this->isDeveloping = $isDeveloping;
        $this->createdOn = new \DateTime();
        $this->markAsUpdated();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isDeveloping(): bool
    {
        return $this->isDeveloping;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedOn(): \DateTime
    {
        return $this->updatedOn;
    }

    public function markAsUpdated(): void
    {
        $this->updatedOn = new \DateTime();
    }
}