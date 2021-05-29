<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SecretScanningAlert_Created
{
    public const SCHEMA_TITLE = 'secret_scanning_alert created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The secret scanning alert involved in the event.
     */
    private array $alert = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $organization = array();
    /**
     * Installation
     */
    private array $installation = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function alert() : array
    {
        return $this->alert;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function organization() : array
    {
        return $this->organization;
    }
    public function installation() : array
    {
        return $this->installation;
    }
}
