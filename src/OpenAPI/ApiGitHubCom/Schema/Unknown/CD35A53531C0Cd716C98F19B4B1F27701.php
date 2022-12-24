<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CD35A53531C0Cd716C98F19B4B1F27701
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the custom role."},"description":{"type":"string","description":"A short description about who this role is for or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role. If specified, these permissions will replace any currently set on the role."}}}';
    public const SCHEMA_TITLE = 'c_d35a53531c0cd716c98f19b4b1f27701';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the custom role.
     */
    private string $name;
    /**
     * A short description about who this role is for or what permissions it grants.
     */
    private string $description;
    /**
     * The system role from which this role inherits permissions.
     */
    private string $base_role;
    /**
     * A list of additional permissions included in this role. If specified, these permissions will replace any currently set on the role.
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
     * A short description about who this role is for or what permissions it grants.
     */
    public function description() : string
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
     * A list of additional permissions included in this role. If specified, these permissions will replace any currently set on the role.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function permissions() : array
    {
        return $this->permissions;
    }
}
