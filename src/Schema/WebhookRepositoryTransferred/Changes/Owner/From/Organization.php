<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Organization
{
    public const SCHEMA_JSON = '{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"https:\\/\\/example.com\\/","description":"generated_description_null","events_url":"https:\\/\\/example.com\\/","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"issues_url":"https:\\/\\/example.com\\/","login":"generated_login_null","members_url":"generated_members_url_uri-template","node_id":"generated_node_id_null","public_members_url":"generated_public_members_url_uri-template","repos_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('public_members_url')] public string $publicMembersUrl, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, public string $url)
    {
    }
}
