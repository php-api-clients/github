<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion_Answered
{
    public const SCHEMA_TITLE = 'discussion answered event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $discussion;
    private array $answer = array();
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
    public function answer() : array
    {
        return $this->answer;
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
