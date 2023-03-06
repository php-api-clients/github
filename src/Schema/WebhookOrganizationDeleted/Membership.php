<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationDeleted;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Membership
{
    public const SCHEMA_JSON = '{"title":"Membership","required":["url","state","role","organization_url","user"],"type":"object","properties":{"organization_url":{"type":"string","format":"uri"},"role":{"type":"string"},"state":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The membership between the user and the organization. Not present when the action is `member_invited`."}';
    public const SCHEMA_TITLE = 'Membership';
    public const SCHEMA_DESCRIPTION = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"organization_url":"generated_organization_url","role":"generated_role","state":"generated_state","url":"generated_url","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    public function __construct(public ?string $organization_url, public ?string $role, public ?string $state, public ?string $url, public ?Schema\Discussion\AnswerChosenBy $user)
    {
    }
}
