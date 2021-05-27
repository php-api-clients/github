<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PreReceiveHook
{
    public const SCHEMA_TITLE = 'pre-receive-hook';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $name = null;
    private ?string $enforcement = null;
    private ?string $script = null;
    private ?object $script_repository = null;
    private ?object $environment = null;
    private ?bool $allow_downstream_configuration = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function enforcement() : ?string
    {
        return $this->enforcement;
    }
    public function script() : ?string
    {
        return $this->script;
    }
    public function script_repository() : ?object
    {
        return $this->script_repository;
    }
    public function environment() : ?object
    {
        return $this->environment;
    }
    public function allow_downstream_configuration() : ?bool
    {
        return $this->allow_downstream_configuration;
    }
}
