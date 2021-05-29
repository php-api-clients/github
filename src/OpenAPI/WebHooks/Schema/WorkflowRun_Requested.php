<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowRun_Requested
{
    public const SCHEMA_TITLE       = 'workflow_run requested event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $organization     = [];
    /**
     * A git repository
     */
    private array $repository   = [];
    private array $sender       = [];
    private array $workflow     = [];
    private array $workflow_run = [];
    /**
     * Installation
     */
    private array $installation = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function organization(): array
    {
        return $this->organization;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function workflow(): array
    {
        return $this->workflow;
    }

    public function workflow_run(): array
    {
        return $this->workflow_run;
    }

    public function installation(): array
    {
        return $this->installation;
    }
}
