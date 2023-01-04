<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookOrganizationMemberRemoved;

final class Membership
{
    public const SCHEMA_JSON = '{"title":"Membership","required":["url","state","role","organization_url","user"],"type":"object","properties":{"organization_url":{"type":"string","format":"uri"},"role":{"type":"string"},"state":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The membership between the user and the organization. Not present when the action is `member_invited`."}';
    public const SCHEMA_TITLE = 'Membership';
    public const SCHEMA_DESCRIPTION = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    private string $organization_url;
    private string $role;
    private string $state;
    private string $url;
    private $user;
    public function organization_url() : string
    {
        return $this->organization_url;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function user()
    {
        return $this->user;
    }
}
