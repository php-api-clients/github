<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C2A112522Bb7349642D5Db15Fb25762Bc
{
    public const SCHEMA_JSON = '{"required":["name","base_role","permissions"],"type":"object","properties":{"name":{"type":"string","description":"The name of the custom role."},"description":{"type":"string","description":"A short description about the intended usage of this role or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role."}}}';
    public const SCHEMA_TITLE = 'c_2a112522bb7349642d5db15fb25762bc';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the custom role.
     */
    private string $name;
    /**
     * A short description about the intended usage of this role or what permissions it grants.
     */
    private ?string $description = null;
    /**
     * The system role from which this role inherits permissions.
     */
    private string $base_role;
    /**
     * A list of additional permissions included in this role.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $permissions = array();
    /**
     * The name of the custom role.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * A short description about the intended usage of this role or what permissions it grants.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * The system role from which this role inherits permissions.
     */
    public function base_role() : string
    {
        return $this->base_role;
    }
    /**
     * A list of additional permissions included in this role.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function permissions() : array
    {
        return $this->permissions;
    }
}
