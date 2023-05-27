<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet93C9B675\Tiet0FC23C1C\Tiet3E354A7C;

abstract readonly class Tiet174AE064
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated","branch":"generated","commit":"generated","type":"generated"}';

    public function __construct(public ?string $url, public ?string $branch, public ?string $commit, public ?string $type)
    {
    }
}
