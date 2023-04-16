<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstractf72f794e2732dfb673ccb569295f5040
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":false}';

    public function __construct(public ?bool $from)
    {
    }
}
