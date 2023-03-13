<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateCommitComment\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."},"path":{"type":"string","description":"Relative path of the file to comment on."},"position":{"type":"integer","description":"Line index in the diff to comment on."},"line":{"type":"integer","description":"**Deprecated**. Use **position** parameter instead. Line number in the file to comment on."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body","path":"generated_path","position":13,"line":13}';
    /**
     * body: The contents of the comment.
     * path: Relative path of the file to comment on.
     * position: Line index in the diff to comment on.
     * line: **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     */
    public function __construct(public string $body, public ?string $path, public ?int $position, public ?int $line)
    {
    }
}
