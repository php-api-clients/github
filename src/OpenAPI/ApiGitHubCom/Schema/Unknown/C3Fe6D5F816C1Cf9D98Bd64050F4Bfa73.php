<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"maintainers":{"type":"array","items":{"type":"string"},"description":"List GitHub IDs for organization members who will become team maintainers."},"repo_names":{"type":"array","items":{"type":"string"},"description":"The full name (e.g., \\"organization-name\\/repository-name\\") of repositories to add the team to."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. The options are:  \\n**For a non-nested team:**  \\n\\\\* `secret` - only visible to organization owners and members of this team.  \\n\\\\* `closed` - visible to all members of this organization.  \\nDefault: `secret`  \\n**For a parent or child team:**  \\n\\\\* `closed` - visible to all members of this organization.  \\nDefault for child team: `closed`"},"permission":{"enum":["pull","push"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified.","default":"pull"},"parent_team_id":{"type":"integer","description":"The ID of a team to set as the parent team."}}}';
    public const SCHEMA_TITLE = 'c_3fe6d5f816c1cf9d98bd64050f4bfa73';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the team.
     */
    private string $name;
    /**
     * The description of the team.
     */
    private ?string $description = null;
    /**
     * List GitHub IDs for organization members who will become team maintainers.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\Maintainers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\Maintainers::class)
     */
    private array $maintainers = array();
    /**
     * The full name (e.g., "organization-name/repository-name") of repositories to add the team to.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\RepoNames>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\RepoNames::class)
     */
    private array $repo_names = array();
    /**
    * The level of privacy this team should have. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    Default: `secret`  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.  
    Default for child team: `closed`
    */
    private ?string $privacy = null;
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    private ?string $permission = null;
    /**
     * The ID of a team to set as the parent team.
     */
    private ?int $parent_team_id = null;
    /**
     * The name of the team.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The description of the team.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * List GitHub IDs for organization members who will become team maintainers.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\Maintainers>
     */
    public function maintainers() : array
    {
        return $this->maintainers;
    }
    /**
     * The full name (e.g., "organization-name/repository-name") of repositories to add the team to.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3Fe6D5F816C1Cf9D98Bd64050F4Bfa73\RepoNames>
     */
    public function repo_names() : array
    {
        return $this->repo_names;
    }
    /**
    * The level of privacy this team should have. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    Default: `secret`  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.  
    Default for child team: `closed`
    */
    public function privacy() : ?string
    {
        return $this->privacy;
    }
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    public function permission() : ?string
    {
        return $this->permission;
    }
    /**
     * The ID of a team to set as the parent team.
     */
    public function parent_team_id() : ?int
    {
        return $this->parent_team_id;
    }
}
