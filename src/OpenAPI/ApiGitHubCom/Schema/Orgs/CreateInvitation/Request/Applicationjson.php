<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Orgs\CreateInvitation\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"invitee_id":{"type":"integer","description":"**Required unless you provide `email`**. GitHub user ID for the person you are inviting."},"email":{"type":"string","description":"**Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user."},"role":{"enum":["admin","direct_member","billing_manager"],"type":"string","description":"The role for the new member. \\n * `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.  \\n * `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.  \\n * `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.","default":"direct_member"},"team_ids":{"type":"array","items":{"type":"integer"},"description":"Specify IDs for the teams you want to invite new members to."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * **Required unless you provide `email`**. GitHub user ID for the person you are inviting.
     */
    public ?int $invitee_id;
    /**
     * **Required unless you provide `invitee_id`**. Email address of the person you are inviting, which can be an existing GitHub user.
     */
    public ?string $email;
    /**
     * The role for the new member.
     * `admin` - Organization owners with full administrative rights to the organization and complete access to all repositories and teams.
     * `direct_member` - Non-owner organization members with ability to see other members and join teams by invitation.
     * `billing_manager` - Non-owner organization members with ability to manage the billing settings of your organization.
     */
    public ?string $role;
    /**
     * Specify IDs for the teams you want to invite new members to.
     */
    public ?array $team_ids;

    public function __construct(int $invitee_id, string $email, string $role, array $team_ids)
    {
        $this->invitee_id = $invitee_id;
        $this->email      = $email;
        $this->role       = $role;
        $this->team_ids   = $team_ids;
    }
}
