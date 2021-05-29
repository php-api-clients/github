<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class IssueComment_Deleted
{
    public const SCHEMA_TITLE       = 'issue_comment deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) the comment belongs to.
     */
    private $issue;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/issues#comments) itself.
     */
    private array $comment = [];
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

    public function issue()
    {
        return $this->issue;
    }

    public function comment(): array
    {
        return $this->comment;
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
