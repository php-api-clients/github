<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF694556E\Tiet3CC88993\TietA89F1ED7;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietAFDF4E13
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","documentation_url":"generated","errors":["generated","generated"]}';

    public function __construct(public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl, public array|null $errors,)
    {
    }
}
