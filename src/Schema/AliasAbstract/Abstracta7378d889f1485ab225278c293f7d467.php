<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstracta7378d889f1485ab225278c293f7d467
{
    public const SCHEMA_JSON = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key_null","name":"generated_name_null","node_id":"generated_node_id_null","spdx_id":"generated_spdx_id_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $key, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('spdx_id')] public string $spdxId, public ?string $url)
    {
    }
}
