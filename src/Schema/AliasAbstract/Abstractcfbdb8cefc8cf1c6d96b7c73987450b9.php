<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstractcfbdb8cefc8cf1c6d96b7c73987450b9
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null","to":"generated_to_null"}';

    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
