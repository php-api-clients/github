<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ValidationError
{
    public const SCHEMA_JSON         = '{"title":"Validation Error","required":["message","documentation_url"],"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}}},"description":"Validation Error"}';
    public const SCHEMA_TITLE        = 'Validation Error';
    public const SCHEMA_DESCRIPTION  = 'Validation Error';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","errors":[{"resource":"generated","field":"generated","message":"generated","code":"generated","index":5,"value":null},{"resource":"generated","field":"generated","message":"generated","code":"generated","index":5,"value":null}]}';

    public function __construct(public string $message, #[MapFrom('documentation_url')]
    public string $documentationUrl, public array|null $errors,)
    {
    }
}
