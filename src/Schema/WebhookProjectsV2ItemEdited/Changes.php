<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["field_value"],"type":"object","properties":{"field_value":{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_value":{"field_node_id":"generated_field_node_id","field_type":"generated_field_type"}}';
    public function __construct(public ?Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue $field_value)
    {
    }
}
