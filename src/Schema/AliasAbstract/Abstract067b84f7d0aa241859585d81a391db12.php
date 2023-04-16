<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract067b84f7d0aa241859585d81a391db12
{
    public const SCHEMA_JSON = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"https:\\/\\/example.com\\/","name":"generated_name_null","type":"generated_type_null","url":"https:\\/\\/example.com\\/","vendor":"generated_vendor_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('about_url')] public string $aboutUrl, public string $name, public string $type, public string $url, public string $vendor)
    {
    }
}
