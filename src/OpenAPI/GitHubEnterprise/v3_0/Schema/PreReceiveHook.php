<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PreReceiveHook
{
    public const SCHEMA_TITLE = 'pre-receive-hook';
    public const SPL_HASH = '0000000065dd67b2000000006352672d';
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
