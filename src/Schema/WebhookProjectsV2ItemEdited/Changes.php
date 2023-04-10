<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ItemEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["field_value"],"type":"object","properties":{"field_value":{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_value":{"field_node_id":"generated_field_node_id_null","field_type":"generated_field_type_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('field_value')] public Schema\WebhookProjectsV2ItemEdited\Changes\FieldValue $fieldValue)
    {
    }
}
