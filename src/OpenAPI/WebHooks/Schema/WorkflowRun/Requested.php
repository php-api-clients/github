<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Workflow;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun;

final class Requested
{
    public const SCHEMA_TITLE       = 'workflow_run requested event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private Organization $organization = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private Repository $repository = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Workflow::class) */
    private Workflow $workflow = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun::class) */
    private WorkflowRun $workflow_run = [];
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private InstallationLite $installation = [];

    public function action(): string
    {
        return $this->action;
    }

    public function organization(): Organization
    {
        return $this->organization;
    }

    /**
     * A git repository
     */
    public function repository(): Repository
    {
        return $this->repository;
    }

    public function sender(): User
    {
        return $this->sender;
    }

    public function workflow(): Workflow
    {
        return $this->workflow;
    }

    public function workflow_run(): WorkflowRun
    {
        return $this->workflow_run;
    }

    /**
     * Installation
     */
    public function installation(): InstallationLite
    {
        return $this->installation;
    }
}