<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\PackageVersion\Metadata;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Docker
{
    public const SCHEMA_JSON = '{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Docker Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag":["generated_tag_null"]}';
    /**
     * @param ?array<string> $tag
     */
    public function __construct(public ?array $tag)
    {
    }
}
