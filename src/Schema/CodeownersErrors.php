<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeownersErrors\Errors;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class CodeownersErrors
{
    public const SCHEMA_JSON         = '{"title":"CODEOWNERS errors","required":["errors"],"type":"object","properties":{"errors":{"type":"array","items":{"required":["line","column","kind","message","path"],"type":"object","properties":{"line":{"type":"integer","description":"The line number where this errors occurs.","examples":[7]},"column":{"type":"integer","description":"The column number where this errors occurs.","examples":[3]},"source":{"type":"string","description":"The contents of the line where the error occurs.","examples":["* user"]},"kind":{"type":"string","description":"The type of error.","examples":["Invalid owner"]},"suggestion":{"type":["string","null"],"description":"Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.","examples":["The pattern `\\/` will never match anything, did you mean `*` instead?"]},"message":{"type":"string","description":"A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).","examples":["Invalid owner on line 7:\\n\\n  * user\\n    ^"]},"path":{"type":"string","description":"The path of the file where the error occured.","examples":[".github\\/CODEOWNERS"]}}}}},"description":"A list of errors found in a repo\'s CODEOWNERS file"}';
    public const SCHEMA_TITLE        = 'CODEOWNERS errors';
    public const SCHEMA_DESCRIPTION  = 'A list of errors found in a repo\'s CODEOWNERS file';
    public const SCHEMA_EXAMPLE_DATA = '{"errors":[{"line":7,"column":3,"source":"* user","kind":"Invalid owner","suggestion":"The pattern `\\/` will never match anything, did you mean `*` instead?","message":"Invalid owner on line 7:\\n\\n  * user\\n    ^","path":".github\\/CODEOWNERS"}]}';

    /**
     * @param array<Errors> $errors
     */
    public function __construct(#[CastListToType(Schema\CodeownersErrors\Errors::class)] public array $errors)
    {
    }
}
