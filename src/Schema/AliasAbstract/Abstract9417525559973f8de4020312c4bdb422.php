<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstract9417525559973f8de4020312c4bdb422
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total":13,"additions":13,"deletions":13}';

    public function __construct(public ?int $total, public ?int $additions, public ?int $deletions)
    {
    }
}
