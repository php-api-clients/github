<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Package_Updated
{
    public const SCHEMA_TITLE       = 'package updated event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * Information about the package.
     */
    private array $package = [];
    /**
     * A git repository
     */
    private array $repository   = [];
    private array $sender       = [];
    private array $organization = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function package(): array
    {
        return $this->package;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function organization(): array
    {
        return $this->organization;
    }
}
