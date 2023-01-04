<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CBa3Faccf3E2861657A3F4136D67Db6F1
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["description"]},{"required":["files"]}],"properties":{"description":{"type":"string","description":"The description of the gist.","examples":["Example Ruby script"]},"files":{"type":"object","description":"The gist files to be updated, renamed, or deleted. Each `key` must match the current filename\\n(including extension) of the targeted gist file. For example: `hello.py`.\\n\\nTo delete a file, set the whole file to null. For example: `hello.py : null`.","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file."},"filename":{"type":["string","null"],"description":"The new filename for the file."}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}}}';
    public const SCHEMA_TITLE = 'c_ba3faccf3e2861657a3f4136d67db6f1';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The description of the gist.
     */
    private string $description;
    /**
    * The gist files to be updated, renamed, or deleted. Each `key` must match the current filename
    (including extension) of the targeted gist file. For example: `hello.py`.
    
    To delete a file, set the whole file to null. For example: `hello.py : null`.
    * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CBa3Faccf3E2861657A3F4136D67Db6F1\Files::class)
    */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CBa3Faccf3E2861657A3F4136D67Db6F1\Files $files;
    /**
     * The description of the gist.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
    * The gist files to be updated, renamed, or deleted. Each `key` must match the current filename
    (including extension) of the targeted gist file. For example: `hello.py`.
    
    To delete a file, set the whole file to null. For example: `hello.py : null`.
    */
    public function files() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CBa3Faccf3E2861657A3F4136D67Db6F1\Files
    {
        return $this->files;
    }
}
