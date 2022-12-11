<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationCustomRepositoryRole
{
    public const SCHEMA_TITLE = 'Organization Custom Repository Role';
    public const SCHEMA_DESCRIPTION = 'Custom repository roles created by organization administrators';
    /**
     * The unique identifier of the custom role.
     */
    private int $id;
    /**
     * The name of the custom role.
     */
    private string $name;
    /**
     * A short description about who this role is for or what permissions it grants.
     */
    private $description;
    /**
     * The system role from which this role inherits permissions.
     */
    private ?string $base_role = null;
    /**
     * A list of additional permissions included in this role.
     */
    private array $permissions = array();
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $organization = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * The unique identifier of the custom role.
     */
    public function id() : int
    {
        return $this->id;
    }
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
    public function description()
    {
        return $this->description;
    }
    /**
     * The system role from which this role inherits permissions.
     */
    public function base_role() : ?string
    {
        return $this->base_role;
    }
    /**
     * A list of additional permissions included in this role.
     */
    public function permissions() : array
    {
        return $this->permissions;
    }
    /**
     * A GitHub user.
     */
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->organization;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
