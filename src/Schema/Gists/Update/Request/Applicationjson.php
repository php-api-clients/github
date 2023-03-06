<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Gists\Update\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["description"]},{"required":["files"]}],"properties":{"description":{"type":"string","description":"The description of the gist.","examples":["Example Ruby script"]},"files":{"type":"object","description":"The gist files to be updated, renamed, or deleted. Each `key` must match the current filename\\n(including extension) of the targeted gist file. For example: `hello.py`.\\n\\nTo delete a file, set the whole file to null. For example: `hello.py : null`.","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file."},"filename":{"type":["string","null"],"description":"The new filename for the file."}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"Example Ruby script","files":{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}}';
    /**
    * description: The description of the gist.
    * files: The gist files to be updated, renamed, or deleted. Each `key` must match the current filename
    (including extension) of the targeted gist file. For example: `hello.py`.
    
    To delete a file, set the whole file to null. For example: `hello.py : null`.
    */
    public function __construct(public ?string $description, public mixed $files)
    {
    }
}
