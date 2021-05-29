<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowDispatch_Event
{
    public const SCHEMA_TITLE       = 'workflow_dispatch event';
    public const SCHEMA_DESCRIPTION = '';
    private $inputs;
    private ?string $ref = null;
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
    private ?string $workflow   = null;

    public function inputs()
    {
        return $this->inputs;
    }

    public function ref(): ?string
    {
        return $this->ref;
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

    public function workflow(): ?string
    {
        return $this->workflow;
    }
}
