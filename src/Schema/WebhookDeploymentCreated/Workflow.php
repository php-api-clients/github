<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Workflow
{
    public const SCHEMA_JSON = '{"title":"Workflow","required":["badge_url","created_at","html_url","id","name","node_id","path","state","updated_at","url"],"type":["object","null"],"properties":{"badge_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"state":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"badge_url":"generated_badge_url","created_at":"generated_created_at","html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","path":"generated_path","state":"generated_state","updated_at":"generated_updated_at","url":"generated_url"}';
    public function __construct(public ?string $badge_url, public ?string $created_at, public ?string $html_url, public ?int $id, public ?string $name, public ?string $node_id, public ?string $path, public ?string $state, public ?string $updated_at, public ?string $url)
    {
    }
}
