<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GistSimple;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Files
{
    public const SCHEMA_JSON = '{"type":"object","additionalProperties":{"type":["object","null"],"properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"},"truncated":{"type":"boolean"},"content":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
