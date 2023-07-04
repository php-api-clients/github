<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PackageVersion;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Metadata
{
    public const SCHEMA_JSON         = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"package_type":"docker","container":{"tags":["generated","generated"]},"docker":{"tag":["generated","generated"]}}';

    public function __construct(#[MapFrom('package_type')]
    public string $packageType, public Schema\PackageVersion\Metadata\Container|null $container, public Schema\PackageVersion\Metadata\Docker|null $docker,)
    {
    }
}
