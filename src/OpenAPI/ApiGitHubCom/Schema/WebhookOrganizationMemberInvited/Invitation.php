<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationMemberInvited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy;

final readonly class Invitation
{
    public const SCHEMA_JSON        = '{"required":["id","node_id","login","email","role","created_at","failed_at","failed_reason","inviter","team_count","invitation_teams_url"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"email":{"type":["string","null"]},"failed_at":{"type":["string","null"],"format":"date-time"},"failed_reason":{"type":["string","null"]},"id":{"type":"number"},"invitation_teams_url":{"type":"string","format":"uri"},"inviter":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"login":{"type":["string","null"]},"node_id":{"type":"string"},"role":{"type":"string"},"team_count":{"type":"number"},"invitation_source":{"type":"string"}},"description":"The invitation for the user or email if the action is `member_invited`."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The invitation for the user or email if the action is `member_invited`.';
    public ?string $created_at;
    public ?string $email;
    public ?string $failed_at;
    public ?string $failed_reason;
    public ?int $id;
    public ?string $invitation_teams_url;
    public ?AnswerChosenBy $inviter;
    public ?string $login;
    public ?string $node_id;
    public ?string $role;
    public ?int $team_count;
    public string $invitation_source;

    public function __construct(string $created_at, string $email, string $failed_at, string $failed_reason, int $id, string $invitation_teams_url, AnswerChosenBy $inviter, string $login, string $node_id, string $role, int $team_count, string $invitation_source)
    {
        $this->created_at           = $created_at;
        $this->email                = $email;
        $this->failed_at            = $failed_at;
        $this->failed_reason        = $failed_reason;
        $this->id                   = $id;
        $this->invitation_teams_url = $invitation_teams_url;
        $this->inviter              = $inviter;
        $this->login                = $login;
        $this->node_id              = $node_id;
        $this->role                 = $role;
        $this->team_count           = $team_count;
        $this->invitation_source    = $invitation_source;
    }
}
