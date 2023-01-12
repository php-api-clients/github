<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateInvitation\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"invitee_id":{"type":"integer","description":"**Required unless you provide `email`**. GitHub user ID for the person you are inviting."},"email":{"type":"string","description":"**Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user."},"role":{"enum":["admin","direct_member","billing_manager"],"type":"string","description":"The role for the new member. \\n\\\\* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  \\n\\\\* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  \\n\\\\* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.","default":"direct_member"},"team_ids":{"type":"array","items":{"type":"integer"},"description":"Specify IDs for the teams you want to invite new members to."}}}';
    public const SCHEMA_TITLE = 'CreateInvitation\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     */
    private int $invitee_id;
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     */
    private string $email;
    /**
    * The role for the new member. 
    \* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  
    \* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  
    \* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
    */
    private string $role;
    /**
     * Specify IDs for the teams you want to invite new members to.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat::class)
     */
    private array $team_ids = array();
    /**
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     */
    public function invitee_id() : int
    {
        return $this->invitee_id;
    }
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
    * The role for the new member. 
    \* `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  
    \* `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  
    \* `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
    */
    public function role() : string
    {
        return $this->role;
    }
    /**
     * Specify IDs for the teams you want to invite new members to.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public function team_ids() : array
    {
        return $this->team_ids;
    }
}
