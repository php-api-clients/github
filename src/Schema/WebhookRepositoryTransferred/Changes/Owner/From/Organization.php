<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Organization
{
    public const SCHEMA_JSON = '{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"avatar_url":"generated_avatar_url","description":"generated_description","events_url":"generated_events_url","hooks_url":"generated_hooks_url","html_url":"generated_html_url","id":13,"issues_url":"generated_issues_url","login":"generated_login","members_url":"generated_members_url","node_id":"generated_node_id","public_members_url":"generated_public_members_url","repos_url":"generated_repos_url","url":"generated_url"}';
    public function __construct(public ?string $avatar_url, public ?string $description, public ?string $events_url, public ?string $hooks_url, public string $html_url, public ?int $id, public ?string $issues_url, public ?string $login, public ?string $members_url, public ?string $node_id, public ?string $public_members_url, public ?string $repos_url, public ?string $url)
    {
    }
}
