<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ProjectCard
{
    public const SCHEMA_JSON = '{"required":["after_id"],"type":"object","properties":{"after_id":{"type":["number","null"]},"archived":{"type":"boolean"},"column_id":{"type":"integer"},"column_url":{"type":"string"},"created_at":{"type":"string"},"creator":{"type":["object","null"],"properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"id":{"type":"integer"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":13,"archived":false,"column_id":13,"column_url":"generated_column_url","created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"id":13,"node_id":"generated_node_id","note":"generated_note","project_url":"generated_project_url","updated_at":"generated_updated_at","url":"generated_url"}';
    public function __construct(public ?int $after_id, public bool $archived, public int $column_id, public string $column_url, public string $created_at, public ?Schema\WebhookProjectCardMoved\ProjectCard\Creator $creator, public int $id, public string $node_id, public ?string $note, public string $project_url, public string $updated_at, public string $url)
    {
    }
}
