<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationSimple
{
    public const SCHEMA_JSON = '{"title":"Organization Simple","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"login":{"type":"string","examples":["github"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDEyOk9yZ2FuaXphdGlvbjE="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/repos"]},"events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/events"]},"hooks_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"]},"issues_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/issues"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"]},"public_members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"]},"avatar_url":{"type":"string","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"description":{"type":["string","null"],"examples":["A great organization"]}},"description":"A GitHub organization."}';
    public const SCHEMA_EXAMPLE = '{"login":"github","id":1,"node_id":"MDEyOk9yZ2FuaXphdGlvbjE=","url":"https:\\/\\/api.github.com\\/orgs\\/github","repos_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/repos","events_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/events","hooks_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/hooks","issues_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/issues","members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}","public_members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","description":"A great organization"}';
    public const SCHEMA_TITLE = 'Organization Simple';
    public const SCHEMA_DESCRIPTION = 'A GitHub organization.';
    public readonly string $login;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $repos_url;
    public readonly string $events_url;
    public readonly string $hooks_url;
    public readonly string $issues_url;
    public readonly string $members_url;
    public readonly string $public_members_url;
    public readonly string $avatar_url;
    public readonly ?string $description;
    public function __construct(string $login, int $id, string $node_id, string $url, string $repos_url, string $events_url, string $hooks_url, string $issues_url, string $members_url, string $public_members_url, string $avatar_url, string $description)
    {
        $this->login = $login;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->repos_url = $repos_url;
        $this->events_url = $events_url;
        $this->hooks_url = $hooks_url;
        $this->issues_url = $issues_url;
        $this->members_url = $members_url;
        $this->public_members_url = $public_members_url;
        $this->avatar_url = $avatar_url;
        $this->description = $description;
    }
}
