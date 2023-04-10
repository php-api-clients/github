<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GistSimple;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
