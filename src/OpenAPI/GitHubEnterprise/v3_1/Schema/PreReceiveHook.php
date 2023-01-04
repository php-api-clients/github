<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PreReceiveHook
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"enforcement":{"type":"string"},"script":{"type":"string"},"script_repository":{"type":"object","properties":{"id":{"type":"integer"},"full_name":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"}}},"environment":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"image_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"default_environment":{"type":"boolean"},"created_at":{"type":"string"},"hooks_count":{"type":"integer"},"download":{"type":"object","properties":{"url":{"type":"string"},"state":{"type":"string"},"downloaded_at":{"type":["string","null"]},"message":{"type":["string","null"]}}}}},"allow_downstream_configuration":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'pre-receive-hook';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $enforcement;
    private string $script;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook\ScriptRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook\ScriptRepository $script_repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment $environment;
    private bool $allow_downstream_configuration;
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
    public function script_repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveHook\ScriptRepository
    {
        return $this->script_repository;
    }
    public function environment() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironment
    {
        return $this->environment;
    }
    public function allow_downstream_configuration() : bool
    {
        return $this->allow_downstream_configuration;
    }
}
