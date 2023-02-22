<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Teams\Create\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"maintainers":{"type":"array","items":{"type":"string"},"description":"List GitHub IDs for organization members who will become team maintainers."},"repo_names":{"type":"array","items":{"type":"string"},"description":"The full name (e.g., \\"organization-name\\/repository-name\\") of repositories to add the team to."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. The options are:  \\n**For a non-nested team:**  \\n * `secret` - only visible to organization owners and members of this team.  \\n * `closed` - visible to all members of this organization.  \\nDefault: `secret`  \\n**For a parent or child team:**  \\n * `closed` - visible to all members of this organization.  \\nDefault for child team: `closed`"},"permission":{"enum":["pull","push"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified.","default":"pull"},"parent_team_id":{"type":"integer","description":"The ID of a team to set as the parent team."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the team.
     */
    public ?string $name;
    /**
     * The description of the team.
     */
    public string $description;
    /**
     * List GitHub IDs for organization members who will become team maintainers.
     */
    public array $maintainers;
    /**
     * The full name (e.g., "organization-name/repository-name") of repositories to add the team to.
     */
    public array $repo_names;
    /**
    * The level of privacy this team should have. The options are:  
    **For a non-nested team:**  
    * `secret` - only visible to organization owners and members of this team.  
    * `closed` - visible to all members of this organization.  
    Default: `secret`  
    **For a parent or child team:**  
    * `closed` - visible to all members of this organization.  
    Default for child team: `closed`
    */
    public string $privacy;
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    public string $permission;
    /**
     * The ID of a team to set as the parent team.
     */
    public int $parent_team_id;
    public function __construct(string $name, string $description, array $maintainers, array $repo_names, string $privacy, string $permission, int $parent_team_id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->maintainers = $maintainers;
        $this->repo_names = $repo_names;
        $this->privacy = $privacy;
        $this->permission = $permission;
        $this->parent_team_id = $parent_team_id;
    }
}
