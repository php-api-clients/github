<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class DiscussionComment_Deleted
{
    public const SCHEMA_TITLE = 'discussion_comment deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $comment = array();
    private array $discussion = array();
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
    public function discussion() : array
    {
        return $this->discussion;
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
