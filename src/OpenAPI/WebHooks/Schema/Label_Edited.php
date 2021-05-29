<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Label_Edited
{
    public const SCHEMA_TITLE = 'label edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $label = array();
    /**
     * The changes to the label if the action was `edited`.
     */
    private array $changes = array();
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
    public function label() : array
    {
        return $this->label;
    }
    public function changes() : array
    {
        return $this->changes;
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
