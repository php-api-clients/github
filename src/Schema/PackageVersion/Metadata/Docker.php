<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PackageVersion\Metadata;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Docker
{
    public const SCHEMA_JSON = '{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Docker Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag":["generated_tag"]}';
    /**
     * @param ?array<string> $tag
     */
    public function __construct(public ?array $tag)
    {
    }
}
