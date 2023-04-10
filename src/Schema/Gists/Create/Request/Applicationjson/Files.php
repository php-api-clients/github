<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Gists\Create\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
