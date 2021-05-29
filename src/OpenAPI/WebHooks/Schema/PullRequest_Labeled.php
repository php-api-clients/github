<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequest_Labeled
{
    public const SCHEMA_TITLE       = 'pull_request labeled event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The pull request number.
     */
    private ?int $number        = null;
    private array $pull_request = [];
    private array $label        = [];
    /**
     * A git repository
     */
    private array $repository = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];
    private array $sender       = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function number(): ?int
    {
        return $this->number;
    }

    public function pull_request(): array
    {
        return $this->pull_request;
    }

    public function label(): array
    {
        return $this->label;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function organization(): array
    {
        return $this->organization;
    }

    public function sender(): array
    {
        return $this->sender;
    }
}
