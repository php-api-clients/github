<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class IssueComment_Edited
{
    public const SCHEMA_TITLE = 'issue_comment edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The changes to the comment.
     */
    private array $changes = array();
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) the comment belongs to.
     */
    private $issue;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/issues#comments) itself.
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
    public function changes() : array
    {
        return $this->changes;
    }
    public function issue()
    {
        return $this->issue;
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
