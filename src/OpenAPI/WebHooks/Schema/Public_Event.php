<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Public_Event
{
    public const SCHEMA_TITLE       = 'public event';
    public const SCHEMA_DESCRIPTION = 'When a private repository is made public.';
    private $repository;
    private array $sender = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

    public function repository()
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
