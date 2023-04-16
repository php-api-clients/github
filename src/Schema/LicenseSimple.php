<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class LicenseSimple
{
    public const SCHEMA_JSON = '{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}';
    public const SCHEMA_TITLE = 'License Simple';
    public const SCHEMA_DESCRIPTION = 'License Simple';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"mit","name":"MIT License","url":"https:\\/\\/api.github.com\\/licenses\\/mit","spdx_id":"MIT","node_id":"MDc6TGljZW5zZW1pdA==","html_url":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $key, public string $name, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('spdx_id')] public ?string $spdxId, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl)
    {
    }
}
