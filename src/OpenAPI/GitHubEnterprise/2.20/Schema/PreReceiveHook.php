<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Schema;

final class PreReceiveHook
{
    public const SCHEMA_TITLE = 'pre-receive-hook';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $enforcement;
    private string $script;
    private object $script_repository;
    private object $environment;
    private boolean $allow_downstream_configuration;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function enforcement() : string
    {
        return $this->enforcement;
    }
    public function script() : string
    {
        return $this->script;
    }
    public function script_repository() : object
    {
        return $this->script_repository;
    }
    public function environment() : object
    {
        return $this->environment;
    }
    public function allow_downstream_configuration() : boolean
    {
        return $this->allow_downstream_configuration;
    }
}
