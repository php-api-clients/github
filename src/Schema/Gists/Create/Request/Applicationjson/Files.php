<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Gists\Create\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Files
{
    public const SCHEMA_JSON = '{"type":"object","description":"Names and content for the files that make up the gist","additionalProperties":{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"Content of the file","readOnly":false}}},"examples":[{"hello.rb":{"content":"puts \\"Hello, World!\\""}}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Names and content for the files that make up the gist';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
