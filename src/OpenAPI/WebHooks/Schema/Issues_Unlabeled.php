<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issues_Unlabeled
{
    public const SCHEMA_TITLE = 'issues unlabeled event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $issue = array();
    private array $label = array();
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
    public function issue() : array
    {
        return $this->issue;
    }
    public function label() : array
    {
        return $this->label;
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
