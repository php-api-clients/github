<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookOrganizationDeleted;

final readonly class Membership
{
    public const SCHEMA_JSON = '{"title":"Membership","required":["url","state","role","organization_url","user"],"type":"object","properties":{"organization_url":{"type":"string","format":"uri"},"role":{"type":"string"},"state":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The membership between the user and the organization. Not present when the action is `member_invited`."}';
    public const SCHEMA_TITLE = 'Membership';
    public const SCHEMA_DESCRIPTION = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    public ?string $organization_url;
    public ?string $role;
    public ?string $state;
    public ?string $url;
    public ?\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $user;
    public function __construct(string $organization_url, string $role, string $state, string $url, \ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $user)
    {
        $this->organization_url = $organization_url;
        $this->role = $role;
        $this->state = $state;
        $this->url = $url;
        $this->user = $user;
    }
}
