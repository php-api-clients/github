<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SecretScanningAlert_Resolved
{
    public const SCHEMA_TITLE       = 'secret_scanning_alert resolved event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The secret scanning alert involved in the event.
     */
    private array $alert = [];
    /**
     * A git repository
     */
    private array $repository   = [];
    private array $organization = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $sender       = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function alert(): array
    {
        return $this->alert;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function organization(): array
    {
        return $this->organization;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function sender(): array
    {
        return $this->sender;
    }
}
