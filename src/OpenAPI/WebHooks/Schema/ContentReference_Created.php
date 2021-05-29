<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ContentReference_Created
{
    public const SCHEMA_TITLE = 'content_reference created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $content_reference = array();
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
    public function content_reference() : array
    {
        return $this->content_reference;
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
