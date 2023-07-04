<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ValidationErrorSimple
{
    public const SCHEMA_JSON         = '{"title":"Validation Error Simple","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}},"description":"Validation Error Simple"}';
    public const SCHEMA_TITLE        = 'Validation Error Simple';
    public const SCHEMA_DESCRIPTION  = 'Validation Error Simple';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","errors":["generated","generated"]}';

    public function __construct(public string $message, #[MapFrom('documentation_url')]
    public string $documentationUrl, public array|null $errors,)
    {
    }
}
