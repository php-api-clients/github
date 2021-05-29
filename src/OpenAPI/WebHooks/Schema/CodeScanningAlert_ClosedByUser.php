<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CodeScanningAlert_ClosedByUser
{
    public const SCHEMA_TITLE = 'code_scanning_alert closed_by_user event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The code scanning alert involved in the event.
     */
    private array $alert = array();
    /**
     * The Git reference of the code scanning alert. When the action is `reopened_by_user` or `closed_by_user`, the event was triggered by the `sender` and this value will be empty.
     */
    private ?string $ref = null;
    /**
     * The commit SHA of the code scanning alert. When the action is `reopened_by_user` or `closed_by_user`, the event was triggered by the `sender` and this value will be empty.
     */
    private ?string $commit_oid = null;
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
    public function alert() : array
    {
        return $this->alert;
    }
    public function ref() : ?string
    {
        return $this->ref;
    }
    public function commit_oid() : ?string
    {
        return $this->commit_oid;
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
