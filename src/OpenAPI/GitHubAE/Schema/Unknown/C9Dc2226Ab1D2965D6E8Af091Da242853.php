<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9Dc2226Ab1D2965D6E8Af091Da242853
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the team."},"description":{"type":"string","description":"The description of the team."},"privacy":{"enum":["secret","closed"],"type":"string","description":"The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  \\n**For a non-nested team:**  \\n\\\\* `secret` - only visible to organization owners and members of this team.  \\n\\\\* `closed` - visible to all members of this organization.  \\n**For a parent or child team:**  \\n\\\\* `closed` - visible to all members of this organization."},"permission":{"enum":["pull","push","admin"],"type":"string","description":"**Deprecated**. The permission that new repositories will be added to the team with when none is specified.","default":"pull"},"parent_team_id":{"type":["integer","null"],"description":"The ID of a team to set as the parent team."}}}';
    public const SCHEMA_TITLE = 'c_9dc2226ab1d2965d6e8af091da242853';
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
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
    */
    private ?string $privacy = null;
    /**
     * **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     */
    private ?string $permission = null;
    /**
     * The ID of a team to set as the parent team.
     */
    private $parent_team_id;
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
    * The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. The options are:  
    **For a non-nested team:**  
    \* `secret` - only visible to organization owners and members of this team.  
    \* `closed` - visible to all members of this organization.  
    **For a parent or child team:**  
    \* `closed` - visible to all members of this organization.
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
    public function parent_team_id()
    {
        return $this->parent_team_id;
    }
}