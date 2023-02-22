<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Update\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["description"]},{"required":["files"]}],"properties":{"description":{"type":"string","description":"The description of the gist.","examples":["Example Ruby script"]},"files":{"type":"object","description":"The gist files to be updated, renamed, or deleted. Each `key` must match the current filename\\n(including extension) of the targeted gist file. For example: `hello.py`.\\n\\nTo delete a file, set the whole file to null. For example: `hello.py : null`.","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file."},"filename":{"type":["string","null"],"description":"The new filename for the file."}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The description of the gist.
     */
    public ?string $description;
    /**
    * The gist files to be updated, renamed, or deleted. Each `key` must match the current filename
    (including extension) of the targeted gist file. For example: `hello.py`.
    
    To delete a file, set the whole file to null. For example: `hello.py : null`.
    */
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Update\Request\Applicationjson\Files $files;
    public function __construct(string $description, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Update\Request\Applicationjson\Files $files)
    {
        $this->description = $description;
        $this->files = $files;
    }
}
