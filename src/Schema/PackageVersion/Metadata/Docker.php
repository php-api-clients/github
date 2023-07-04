<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PackageVersion\Metadata;

final readonly class Docker
{
    public const SCHEMA_JSON         = '{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = 'Docker Metadata';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag":["generated","generated"]}';

    public function __construct(public array|null $tag)
    {
    }
}
