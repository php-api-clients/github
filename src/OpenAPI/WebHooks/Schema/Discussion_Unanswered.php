<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion_Unanswered
{
    public const SCHEMA_TITLE = 'discussion unanswered event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $discussion;
    private array $old_answer = array();
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
    public function discussion()
    {
        return $this->discussion;
    }
    public function old_answer() : array
    {
        return $this->old_answer;
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
