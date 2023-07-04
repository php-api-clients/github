<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8FE3C5A2\Tiet0C02B2B7\Tiet01F1BFD6;

abstract readonly class Tiet6504F76F
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated","body":"generated"}';

    /**
     * title: The discussion post's title.
     * body: The discussion post's body text.
     */
    public function __construct(public string|null $title, public string|null $body)
    {
    }
}
