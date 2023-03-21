<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationMemberInvited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Invitation
{
    public const SCHEMA_JSON = '{"required":["id","node_id","login","email","role","created_at","failed_at","failed_reason","inviter","team_count","invitation_teams_url"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"email":{"type":["string","null"]},"failed_at":{"type":["string","null"],"format":"date-time"},"failed_reason":{"type":["string","null"]},"id":{"type":"number"},"invitation_teams_url":{"type":"string","format":"uri"},"inviter":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"login":{"type":["string","null"]},"node_id":{"type":"string"},"role":{"type":"string"},"team_count":{"type":"number"},"invitation_source":{"type":"string"}},"description":"The invitation for the user or email if the action is `member_invited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The invitation for the user or email if the action is `member_invited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"1970-01-01T00:00:00+00:00","email":"generated_email_null","failed_at":"1970-01-01T00:00:00+00:00","failed_reason":"generated_failed_reason_null","id":13,"invitation_teams_url":"https:\\/\\/example.com\\/","inviter":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"generated_type_null","url":"https:\\/\\/example.com\\/"},"login":"generated_login_null","node_id":"generated_node_id_null","role":"generated_role_null","team_count":13,"invitation_source":"generated_invitation_source_null"}';
    public function __construct(public string $created_at, public ?string $email, public ?string $failed_at, public ?string $failed_reason, public int $id, public string $invitation_teams_url, public ?Schema\Discussion\AnswerChosenBy $inviter, public ?string $login, public string $node_id, public string $role, public int $team_count, public ?string $invitation_source)
    {
    }
}
