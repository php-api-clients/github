<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CheckRun_RequestedAction
{
    public const SCHEMA_TITLE       = 'check_run requested_action event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [check_run](https://docs.github.com/en/rest/reference/checks#get-a-check-run).
     */
    private array $check_run = [];
    /**
     * The action requested by the user.
     */
    private array $requested_action = [];
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

    public function check_run(): array
    {
        return $this->check_run;
    }

    public function requested_action(): array
    {
        return $this->requested_action;
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
