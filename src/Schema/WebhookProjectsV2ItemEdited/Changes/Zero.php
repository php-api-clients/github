<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Zero
{
    public const SCHEMA_JSON         = '{"required":["field_value"],"type":"object","properties":{"field_value":{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_value":{"field_node_id":"generated","field_type":"generated"}}';

    public function __construct(#[MapFrom('field_value')]
    public Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue $fieldValue,)
    {
    }
}
