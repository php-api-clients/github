<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRepositoryTransferred\Changes\Owner\From;

final readonly class Organization
{
    public const SCHEMA_JSON = '{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $avatar_url;
    public ?string $description;
    public ?string $events_url;
    public ?string $hooks_url;
    public string $html_url;
    public ?int $id;
    public ?string $issues_url;
    public ?string $login;
    public ?string $members_url;
    public ?string $node_id;
    public ?string $public_members_url;
    public ?string $repos_url;
    public ?string $url;
    public function __construct(string $avatar_url, string $description, string $events_url, string $hooks_url, string $html_url, int $id, string $issues_url, string $login, string $members_url, string $node_id, string $public_members_url, string $repos_url, string $url)
    {
        $this->avatar_url = $avatar_url;
        $this->description = $description;
        $this->events_url = $events_url;
        $this->hooks_url = $hooks_url;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->issues_url = $issues_url;
        $this->login = $login;
        $this->members_url = $members_url;
        $this->node_id = $node_id;
        $this->public_members_url = $public_members_url;
        $this->repos_url = $repos_url;
        $this->url = $url;
    }
}
