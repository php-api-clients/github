<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationMemberInvited;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Invitation
{
    public const SCHEMA_JSON         = '{"required":["id","node_id","login","email","role","created_at","failed_at","failed_reason","inviter","team_count","invitation_teams_url"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"email":{"type":["string","null"]},"failed_at":{"type":["string","null"],"format":"date-time"},"failed_reason":{"type":["string","null"]},"id":{"type":"number"},"invitation_teams_url":{"type":"string","format":"uri"},"inviter":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"login":{"type":["string","null"]},"node_id":{"type":"string"},"role":{"type":"string"},"team_count":{"type":"number"},"invitation_source":{"type":"string"}},"description":"The invitation for the user or email if the action is `member_invited`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The invitation for the user or email if the action is `member_invited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","email":"generated","failed_at":"1970-01-01T00:00:00+00:00","failed_reason":"generated","id":0.2,"invitation_teams_url":"https:\\/\\/example.com\\/","inviter":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"login":"generated","name":"generated","node_id":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"Organization","url":"https:\\/\\/example.com\\/"},"login":"generated","node_id":"generated","role":"generated","team_count":1,"invitation_source":"generated"}';

    public function __construct(#[MapFrom('created_at')] public string $createdAt, public ?string $email, #[MapFrom('failed_at')] public ?string $failedAt, #[MapFrom('failed_reason')] public ?string $failedReason, public int|float $id, #[MapFrom('invitation_teams_url')] public string $invitationTeamsUrl, public ?Schema\WebhookOrganizationMemberInvited\Invitation\Inviter $inviter, public ?string $login, #[MapFrom('node_id')] public string $nodeId, public string $role, #[MapFrom('team_count')] public int|float $teamCount, #[MapFrom('invitation_source')] public ?string $invitationSource)
    {
    }
}
