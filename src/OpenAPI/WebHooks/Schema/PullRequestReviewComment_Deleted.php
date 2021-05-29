<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequestReviewComment_Deleted
{
    public const SCHEMA_TITLE = 'pull_request_review_comment deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The [comment](https://docs.github.com/en/rest/reference/pulls#comments) itself.
     */
    private array $comment = array();
    private array $pull_request = array();
    /**
     * A git repository
     */
    private array $repository = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function comment() : array
    {
        return $this->comment;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
