<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CFc3E0B523258C076B7E39820E8Ba8Dce
{
    public const SCHEMA_JSON = '{"required":["name","script","script_repository","environment"],"type":"object","properties":{"name":{"type":"string","description":"The name of the hook."},"script":{"type":"string","description":"The script that the hook runs."},"script_repository":{"type":"object","properties":{},"description":"The GitHub repository where the script is kept.","additionalProperties":true},"environment":{"type":"object","properties":{},"description":"The pre-receive environment where the script is executed.","additionalProperties":true},"enforcement":{"type":"string","description":"The state of enforcement for this hook. default: `disabled`"},"allow_downstream_configuration":{"type":"boolean","description":"Whether enforcement can be overridden at the org or repo level. default: `false`"}}}';
    public const SCHEMA_TITLE = 'c_fc3e0b523258c076b7e39820e8ba8dce';
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
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\ScriptRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\ScriptRepository $script_repository;
    /**
     * The pre-receive environment where the script is executed.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\Environment::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\Environment $environment;
    /**
     * The state of enforcement for this hook. default: `disabled`
     */
    private ?string $enforcement = null;
    /**
     * Whether enforcement can be overridden at the org or repo level. default: `false`
     */
    private ?bool $allow_downstream_configuration = null;
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
    public function script_repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\ScriptRepository
    {
        return $this->script_repository;
    }
    /**
     * The pre-receive environment where the script is executed.
     */
    public function environment() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CFc3E0B523258C076B7E39820E8Ba8Dce\Environment
    {
        return $this->environment;
    }
    /**
     * The state of enforcement for this hook. default: `disabled`
     */
    public function enforcement() : ?string
    {
        return $this->enforcement;
    }
    /**
     * Whether enforcement can be overridden at the org or repo level. default: `false`
     */
    public function allow_downstream_configuration() : ?bool
    {
        return $this->allow_downstream_configuration;
    }
}
