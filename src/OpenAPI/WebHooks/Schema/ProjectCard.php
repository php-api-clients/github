<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ProjectCard
{
    public const SCHEMA_TITLE       = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url            = null;
    private ?string $project_url    = null;
    private ?string $column_url     = null;
    private ?int $column_id         = null;
    /**
     * The project card's ID
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    private $note;
    /**
     * Whether or not the card is archived
     */
    private ?bool $archived = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $creator       = null;
    private ?string $created_at  = null;
    private ?string $updated_at  = null;
    private ?string $content_url = null;
    private ?null $after_id      = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function project_url(): ?string
    {
        return $this->project_url;
    }

    public function column_url(): ?string
    {
        return $this->column_url;
    }

    public function column_id(): ?int
    {
        return $this->column_id;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function note()
    {
        return $this->note;
    }

    public function archived(): ?bool
    {
        return $this->archived;
    }

    public function creator(): ?User
    {
        return $this->creator;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function content_url(): ?string
    {
        return $this->content_url;
    }

    public function after_id(): ?null
    {
        return $this->after_id;
    }
}
