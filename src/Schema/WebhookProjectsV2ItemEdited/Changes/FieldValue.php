<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class FieldValue
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_node_id":"generated_field_node_id","field_type":"generated_field_type"}';
    public function __construct(public ?string $field_node_id, public ?string $field_type)
    {
    }
}
