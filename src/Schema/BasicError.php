<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class BasicError
{
    public const SCHEMA_JSON         = '{"title":"Basic Error","type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"url":{"type":"string"},"status":{"type":"string"}},"description":"Basic Error"}';
    public const SCHEMA_TITLE        = 'Basic Error';
    public const SCHEMA_DESCRIPTION  = 'Basic Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","url":"generated","status":"generated"}';

    public function __construct(public ?string $message, #[MapFrom('documentation_url')] public ?string $documentationUrl, public ?string $url, public ?string $status)
    {
    }
}
