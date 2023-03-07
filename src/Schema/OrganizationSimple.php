<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class OrganizationSimple
{
    public const SCHEMA_JSON = '{"title":"Organization Simple","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"login":{"type":"string","examples":["github"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDEyOk9yZ2FuaXphdGlvbjE="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/repos"]},"events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/events"]},"hooks_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"]},"issues_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/issues"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"]},"public_members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"]},"avatar_url":{"type":"string","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"description":{"type":["string","null"],"examples":["A great organization"]}},"description":"A GitHub organization."}';
    public const SCHEMA_TITLE = 'Organization Simple';
    public const SCHEMA_DESCRIPTION = 'A GitHub organization.';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"github","id":1,"node_id":"MDEyOk9yZ2FuaXphdGlvbjE=","url":"https:\\/\\/api.github.com\\/orgs\\/github","repos_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/repos","events_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/events","hooks_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/hooks","issues_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/issues","members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}","public_members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","description":"A great organization"}';
    public function __construct(public ?string $login, public ?int $id, public ?string $node_id, public ?string $url, public ?string $repos_url, public ?string $events_url, public ?string $hooks_url, public ?string $issues_url, public ?string $members_url, public ?string $public_members_url, public ?string $avatar_url, public ?string $description)
    {
    }
}
