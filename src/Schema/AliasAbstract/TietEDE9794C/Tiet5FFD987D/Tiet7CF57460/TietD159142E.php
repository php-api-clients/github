<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietEDE9794C\Tiet5FFD987D\Tiet7CF57460;

abstract readonly class TietD159142E
{
    public const SCHEMA_JSON         = '{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE        = 'Link';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated"}';

    public function __construct(public string $href)
    {
    }
}
