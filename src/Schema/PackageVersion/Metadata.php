<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Metadata
{
    public const SCHEMA_JSON = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"package_type":"docker","container":{"tags":["generated_tags_null"]},"docker":{"tag":["generated_tag_null"]}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('package_type')] public string $packageType, public ?Schema\PackageVersion\Metadata\Container $container, public ?Schema\PackageVersion\Metadata\Docker $docker)
    {
    }
}
