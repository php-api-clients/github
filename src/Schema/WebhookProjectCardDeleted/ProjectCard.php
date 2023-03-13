<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardDeleted;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["url","project_url","column_url","column_id","id","node_id","note","archived","creator","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"archived":{"type":"boolean","description":"Whether or not the card is archived"},"column_id":{"type":["integer","null"]},"column_url":{"type":"string","format":"uri"},"content_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"id":{"type":"integer","description":"The project card\'s ID"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":13,"archived":false,"column_id":13,"column_url":"generated_column_url","content_url":"generated_content_url","created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"id":13,"node_id":"generated_node_id","note":"generated_note","project_url":"generated_project_url","updated_at":"generated_updated_at","url":"generated_url"}';
    /**
     * archived: Whether or not the card is archived
     * id: The project card's ID
     */
    public function __construct(public ?int $after_id, public bool $archived, public ?int $column_id, public string $column_url, public ?string $content_url, public string $created_at, public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $creator, public int $id, public string $node_id, public ?string $note, public string $project_url, public string $updated_at, public string $url)
    {
    }
}
