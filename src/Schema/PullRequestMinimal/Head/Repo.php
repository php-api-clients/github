<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head;

final readonly class Repo
{
    public const SCHEMA_JSON         = '{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"url":"generated","name":"generated"}';

    public function __construct(public int $id, public string $url, public string $name)
    {
    }
}
