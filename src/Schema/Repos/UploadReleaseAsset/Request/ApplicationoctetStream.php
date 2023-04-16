<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UploadReleaseAsset\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class ApplicationoctetStream
{
    public const SCHEMA_JSON = '{"type":"string","description":"The raw file data","format":"binary"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The raw file data';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
