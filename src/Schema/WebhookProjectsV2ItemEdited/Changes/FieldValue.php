<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemEdited\Changes;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class FieldValue
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"field_node_id":{"type":"string"},"field_type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"field_node_id":"generated_field_node_id_null","field_type":"generated_field_type_null"}';

    public function __construct(#[MapFrom('field_node_id')] public ?string $fieldNodeId, #[MapFrom('field_type')] public ?string $fieldType)
    {
    }
}
