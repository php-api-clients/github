<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectColumnCreated;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["url","project_url","cards_url","id","node_id","name","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"cards_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"id":{"type":"integer","description":"The unique identifier of the project column"},"name":{"type":"string","description":"Name of the project column"},"node_id":{"type":"string"},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"after_id":13,"cards_url":"generated_cards_url","created_at":"generated_created_at","id":13,"name":"generated_name","node_id":"generated_node_id","project_url":"generated_project_url","updated_at":"generated_updated_at","url":"generated_url"}';
    /**
     * id: The unique identifier of the project column
     * name: Name of the project column
     */
    public function __construct(public ?int $after_id, public string $cards_url, public string $created_at, public int $id, public string $name, public string $node_id, public string $project_url, public string $updated_at, public string $url)
    {
    }
}
