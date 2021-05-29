<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Project
{
    public const SCHEMA_TITLE       = 'Project';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $owner_url      = null;
    private ?string $url            = null;
    private ?string $html_url       = null;
    private ?string $columns_url    = null;
    private ?int $id                = null;
    private ?string $node_id        = null;
    /**
     * Name of the project
     */
    private ?string $name = null;
    /**
     * Body of the project
     */
    private $body;
    private ?int $number = null;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private ?string $state = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $creator      = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;

    public function owner_url(): ?string
    {
        return $this->owner_url;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function columns_url(): ?string
    {
        return $this->columns_url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * Name of the project
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * Body of the project
     */
    public function body()
    {
        return $this->body;
    }

    public function number(): ?int
    {
        return $this->number;
    }

    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state(): ?string
    {
        return $this->state;
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
}
