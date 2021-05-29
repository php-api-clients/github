<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Public_Event
{
    public const SCHEMA_TITLE = 'public event';
    public const SCHEMA_DESCRIPTION = 'When a private repository is made public.';
    private $repository;
    private array $sender = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    public function repository()
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
