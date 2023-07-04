<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet84C5BF99\TietACADC6EC\Tiet8B2A32F2;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet014E1E35
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated","message":"generated","documentation_url":"generated","errors":[{"code":"generated","message":"generated"},{"code":"generated","message":"generated"}]}';

    public function __construct(public string|null $code, public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl, public array|null $errors,)
    {
    }
}
