<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowRun_Requested
{
    public const SCHEMA_TITLE       = 'workflow_run requested event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Workflow::class) */
    private ?Workflow $workflow = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun::class) */
    private ?WorkflowRun $workflow_run = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function workflow(): ?Workflow
    {
        return $this->workflow;
    }

    public function workflow_run(): ?WorkflowRun
    {
        return $this->workflow_run;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }
}
