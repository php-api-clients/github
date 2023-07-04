<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Authorization;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class App
{
    public const SCHEMA_JSON         = '{"required":["client_id","name","url"],"type":"object","properties":{"client_id":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"client_id":"generated","name":"generated","url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('client_id')]
    public string $clientId, public string $name, public string $url,)
    {
    }
}
