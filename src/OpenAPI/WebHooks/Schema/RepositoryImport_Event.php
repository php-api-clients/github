<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class RepositoryImport_Event
{
    public const SCHEMA_TITLE = 'repository_import event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $status = null;
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
    public function status() : ?string
    {
        return $this->status;
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
