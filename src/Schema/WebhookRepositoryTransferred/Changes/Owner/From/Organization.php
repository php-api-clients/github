<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Organization
{
    public const SCHEMA_JSON         = '{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Organization';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"https:\\/\\/example.com\\/","description":"generated","events_url":"https:\\/\\/example.com\\/","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":2,"issues_url":"https:\\/\\/example.com\\/","login":"generated","members_url":"generated","node_id":"generated","public_members_url":"generated","repos_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('avatar_url')]
    public string $avatarUrl, public string|null $description, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('hooks_url')]
    public string $hooksUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int $id, #[MapFrom('issues_url')]
    public string $issuesUrl, public string $login, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('public_members_url')]
    public string $publicMembersUrl, #[MapFrom('repos_url')]
    public string $reposUrl, public string $url,)
    {
    }
}
