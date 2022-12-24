<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9068Fe7159181C2B20A49C7B4A44157B
{
    public const SCHEMA_JSON = '{"required":["id","node_id","login","email","role","created_at","failed_at","failed_reason","inviter","team_count","invitation_teams_url"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"email":{"type":["string","null"]},"failed_at":{"type":["string","null"],"format":"date-time"},"failed_reason":{"type":["string","null"]},"id":{"type":"number"},"invitation_teams_url":{"type":"string","format":"uri"},"inviter":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"login":{"type":["string","null"]},"node_id":{"type":"string"},"role":{"type":"string"},"team_count":{"type":"number"}},"description":"The invitation for the user or email if the action is `member_invited`."}';
    public const SCHEMA_TITLE = 'c_9068fe7159181c2b20a49c7b4a44157b';
    public const SCHEMA_DESCRIPTION = 'The invitation for the user or email if the action is `member_invited`.';
    private string $created_at;
    private $email;
    private $failed_at;
    private $failed_reason;
    private int $id;
    private string $invitation_teams_url;
    private $inviter;
    private $login;
    private string $node_id;
    private string $role;
    private int $team_count;
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function email()
    {
        return $this->email;
    }
    public function failed_at()
    {
        return $this->failed_at;
    }
    public function failed_reason()
    {
        return $this->failed_reason;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function invitation_teams_url() : string
    {
        return $this->invitation_teams_url;
    }
    public function inviter()
    {
        return $this->inviter;
    }
    public function login()
    {
        return $this->login;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function team_count() : int
    {
        return $this->team_count;
    }
}