<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequestReview_Edited
{
    public const SCHEMA_TITLE       = 'pull_request_review edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $changes          = [];
    /**
     * The review that was affected.
     */
    private array $review       = [];
    private array $pull_request = [];
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

    public function changes(): array
    {
        return $this->changes;
    }

    public function review(): array
    {
        return $this->review;
    }

    public function pull_request(): array
    {
        return $this->pull_request;
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
