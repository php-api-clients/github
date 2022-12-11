<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationInvitation
{
    public const SCHEMA_TITLE = 'Organization Invitation';
    public const SCHEMA_DESCRIPTION = 'Organization Invitation';
    private int $id;
    private $login;
    private $email;
    private string $role;
    private string $created_at;
    private $failed_at;
    private $failed_reason;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $inviter;
    private int $team_count;
    private string $node_id;
    private string $invitation_teams_url;
    public function id() : int
    {
        return $this->id;
    }
    public function login()
    {
        return $this->login;
    }
    public function email()
    {
        return $this->email;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function failed_at()
    {
        return $this->failed_at;
    }
    public function failed_reason()
    {
        return $this->failed_reason;
    }
    /**
     * A GitHub user.
     */
    public function inviter() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->inviter;
    }
    public function team_count() : int
    {
        return $this->team_count;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function invitation_teams_url() : string
    {
        return $this->invitation_teams_url;
    }
}
