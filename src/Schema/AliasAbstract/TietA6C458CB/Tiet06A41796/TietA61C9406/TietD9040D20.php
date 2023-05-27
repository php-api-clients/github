<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietA6C458CB\Tiet06A41796\TietA61C9406;

abstract readonly class TietD9040D20
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"Body of the attachment"}';

    /**
     * body: The comment text.
     */
    public function __construct(public string $body)
    {
    }
}
