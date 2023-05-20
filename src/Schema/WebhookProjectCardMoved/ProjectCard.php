<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectCard
{
    public const SCHEMA_JSON         = '{"title":"Project Card","required":["url","project_url","column_url","column_id","id","node_id","note","archived","creator","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"archived":{"type":"boolean","description":"Whether or not the card is archived"},"column_id":{"type":"integer"},"column_url":{"type":"string","format":"uri"},"content_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"id":{"type":"integer","description":"The project card\'s ID"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Project Card';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":8,"archived":false,"column_id":9,"column_url":"https:\\/\\/example.com\\/","content_url":"https:\\/\\/example.com\\/","created_at":"1970-01-01T00:00:00+00:00","creator":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"login":"generated","name":"generated","node_id":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"Mannequin","url":"https:\\/\\/example.com\\/"},"id":2,"node_id":"generated","note":"generated","project_url":"https:\\/\\/example.com\\/","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';

    /**
     * archived: Whether or not the card is archived
     * id: The project card's ID
     */
    public function __construct(#[MapFrom('after_id')] public ?int $afterId, public bool $archived, #[MapFrom('column_id')] public int $columnId, #[MapFrom('column_url')] public string $columnUrl, #[MapFrom('content_url')] public ?string $contentUrl, #[MapFrom('created_at')] public string $createdAt, public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $creator, public int $id, #[MapFrom('node_id')] public string $nodeId, public ?string $note, #[MapFrom('project_url')] public string $projectUrl, #[MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
