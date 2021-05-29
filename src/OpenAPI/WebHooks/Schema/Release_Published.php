<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Release_Published
{
    public const SCHEMA_TITLE       = 'release published event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [release](https://docs.github.com/en/rest/reference/repos/#get-a-release) object.
     */
    private array $release = [];
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

    public function action(): ?string
    {
        return $this->action;
    }

    public function release(): array
    {
        return $this->release;
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
