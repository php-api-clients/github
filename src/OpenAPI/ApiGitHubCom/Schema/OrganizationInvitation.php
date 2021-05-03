<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationInvitation
{
    public const SCHEMA_TITLE = 'Organization Invitation';
    public const SCHEMA_DESCRIPTION = 'Organization Invitation';
    private ?int $id = null;
    private ?string $login = null;
    private ?string $email = null;
    private ?string $role = null;
    private ?string $created_at = null;
    private ?string $failed_at = null;
    private ?string $failed_reason = null;
    /**
     * Simple User
     */
    private ?object $inviter = null;
    private ?int $team_count = null;
    private ?string $node_id = null;
    private ?string $invitation_teams_url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function login() : ?string
    {
        return $this->login;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function role() : ?string
    {
        return $this->role;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function failed_at() : ?string
    {
        return $this->failed_at;
    }
    public function failed_reason() : ?string
    {
        return $this->failed_reason;
    }
    public function inviter() : ?object
    {
        return $this->inviter;
    }
    public function team_count() : ?int
    {
        return $this->team_count;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function invitation_teams_url() : ?string
    {
        return $this->invitation_teams_url;
    }
}
