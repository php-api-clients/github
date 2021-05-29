<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Gollum_Event
{
    public const SCHEMA_TITLE       = 'gollum event';
    public const SCHEMA_DESCRIPTION = 'A wiki page is created or updated.';
    /**
     * The pages that were updated.
     */
    private array $pages = [];
    /**
     * A git repository
     */
    private array $repository = [];
    private array $sender     = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

    public function pages(): array
    {
        return $this->pages;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function organization(): array
    {
        return $this->organization;
    }
}
