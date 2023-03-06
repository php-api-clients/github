<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CodeownersErrors;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"required":["line","column","kind","message","path"],"type":"object","properties":{"line":{"type":"integer","description":"The line number where this errors occurs.","examples":[7]},"column":{"type":"integer","description":"The column number where this errors occurs.","examples":[3]},"source":{"type":"string","description":"The contents of the line where the error occurs.","examples":["* user"]},"kind":{"type":"string","description":"The type of error.","examples":["Invalid owner"]},"suggestion":{"type":["string","null"],"description":"Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.","examples":["The pattern `\\/` will never match anything, did you mean `*` instead?"]},"message":{"type":"string","description":"A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).","examples":["Invalid owner on line 7:\\n\\n  * user\\n    ^"]},"path":{"type":"string","description":"The path of the file where the error occured.","examples":[".github\\/CODEOWNERS"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"line":7,"column":3,"source":"* user","kind":"Invalid owner","suggestion":"The pattern `\\/` will never match anything, did you mean `*` instead?","message":"Invalid owner on line 7:\\n\\n  * user\\n    ^","path":".github\\/CODEOWNERS"}';
    /**
     * line: The line number where this errors occurs.
     * column: The column number where this errors occurs.
     * source: The contents of the line where the error occurs.
     * kind: The type of error.
     * suggestion: Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.
     * message: A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).
     * path: The path of the file where the error occured.
     */
    public function __construct(public ?int $line, public ?int $column, public string $source, public ?string $kind, public ?string $suggestion, public ?string $message, public ?string $path)
    {
    }
}
