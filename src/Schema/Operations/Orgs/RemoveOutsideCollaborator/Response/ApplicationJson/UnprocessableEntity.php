<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class UnprocessableEntity
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated"}';

    public function __construct(public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl)
    {
    }
}
