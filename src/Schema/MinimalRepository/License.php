<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\MinimalRepository;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class License
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated_key","name":"generated_name","spdx_id":"generated_spdx_id","url":"generated_url","node_id":"generated_node_id"}';
    public function __construct(public ?string $key, public ?string $name, public ?string $spdx_id, public ?string $url, public ?string $node_id)
    {
    }
}
