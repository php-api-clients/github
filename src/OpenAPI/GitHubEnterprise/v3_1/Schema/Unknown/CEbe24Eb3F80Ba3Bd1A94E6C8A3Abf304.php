<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CEbe24Eb3F80Ba3Bd1A94E6C8A3Abf304
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the hook."},"script":{"type":"string","description":"The script that the hook runs."},"script_repository":{"type":"object","properties":{},"description":"The GitHub repository where the script is kept.","additionalProperties":true},"environment":{"type":"object","properties":{},"description":"The pre-receive environment where the script is executed.","additionalProperties":true},"enforcement":{"type":"string","description":"The state of enforcement for this hook."},"allow_downstream_configuration":{"type":"boolean","description":"Whether enforcement can be overridden at the org or repo level."}}}';
    public const SCHEMA_TITLE = 'c_ebe24eb3f80ba3bd1a94e6c8a3abf304';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the hook.
     */
    private string $name;
    /**
     * The script that the hook runs.
     */
    private string $script;
    /**
     * The GitHub repository where the script is kept.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0551F5C939349Ae1D321A60707Cd10Ba::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0551F5C939349Ae1D321A60707Cd10Ba $script_repository;
    /**
     * The pre-receive environment where the script is executed.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Af3593D617Cf0Baa84C19D8D7B65952::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Af3593D617Cf0Baa84C19D8D7B65952 $environment;
    /**
     * The state of enforcement for this hook.
     */
    private string $enforcement;
    /**
     * Whether enforcement can be overridden at the org or repo level.
     */
    private bool $allow_downstream_configuration;
    /**
     * The name of the hook.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The script that the hook runs.
     */
    public function script() : string
    {
        return $this->script;
    }
    /**
     * The GitHub repository where the script is kept.
     */
    public function script_repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C0551F5C939349Ae1D321A60707Cd10Ba
    {
        return $this->script_repository;
    }
    /**
     * The pre-receive environment where the script is executed.
     */
    public function environment() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4Af3593D617Cf0Baa84C19D8D7B65952
    {
        return $this->environment;
    }
    /**
     * The state of enforcement for this hook.
     */
    public function enforcement() : string
    {
        return $this->enforcement;
    }
    /**
     * Whether enforcement can be overridden at the org or repo level.
     */
    public function allow_downstream_configuration() : bool
    {
        return $this->allow_downstream_configuration;
    }
}
