<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Gists\Create\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["files"],"type":"object","properties":{"description":{"type":"string","description":"Description of the gist","examples":["Example Ruby script"]},"files":{"type":"object","description":"Names and content for the files that make up the gist","additionalProperties":{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"Content of the file","readOnly":false}}},"examples":[{"hello.rb":{"content":"puts \\"Hello, World!\\""}}]},"public":{"oneOf":[{"type":"boolean","description":"Flag indicating whether the gist is public","default":false,"examples":[true]},{"enum":["true","false"],"type":"string","default":"false","examples":["true"]}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"Example Ruby script","files":{"hello.rb":{"content":"puts \\"Hello, World!\\""}},"public":false}';
    /**
     * description: Description of the gist
     * files: Names and content for the files that make up the gist
     */
    public function __construct(public ?string $description, public mixed $files, public ?bool $public)
    {
    }
}
