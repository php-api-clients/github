<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PackageVersion\Metadata;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Container
{
    public const SCHEMA_JSON = '{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Container Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tags":["generated_tags_null"]}';
    /**
     * @param array<string> $tags
     */
    public function __construct(public array $tags)
    {
    }
}
