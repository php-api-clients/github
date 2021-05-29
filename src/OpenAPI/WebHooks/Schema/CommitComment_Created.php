<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CommitComment_Created
{
    public const SCHEMA_TITLE = 'commit_comment created event';
    public const SCHEMA_DESCRIPTION = 'A commit comment is created. The type of activity is specified in the `action` property. ';
    /**
     * The action performed. Can be `created`.
     */
    private ?string $action = null;
    /**
     * The [commit comment](https://docs.github.com/en/rest/reference/repos#get-a-commit-comment) resource.
     */
    private array $comment = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function comment() : array
    {
        return $this->comment;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
}
