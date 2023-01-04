<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C7Ccb4653982C0C806242F61E2F6Baf9B
{
    public const SCHEMA_JSON = '{"type":["object","null"],"anyOf":[{"required":["description"]},{"required":["files"]}],"properties":{"description":{"type":"string","description":"Description of the gist","examples":["Example Ruby script"]},"files":{"type":"object","description":"Names of files to be updated","additionalProperties":{"type":["object","null"],"anyOf":[{"required":["content"]},{"required":["filename"]},{"maxProperties":0,"type":"object"}],"properties":{"content":{"type":"string","description":"The new content of the file"},"filename":{"type":["string","null"],"description":"The new filename for the file"}}},"examples":[{"hello.rb":{"content":"blah","filename":"goodbye.rb"}}]}}}';
    public const SCHEMA_TITLE = 'c_7ccb4653982c0c806242f61e2f6baf9b';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Description of the gist
     */
    private string $description;
    /**
     * Names of files to be updated
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Ccb4653982C0C806242F61E2F6Baf9B\Files::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Ccb4653982C0C806242F61E2F6Baf9B\Files $files;
    /**
     * Description of the gist
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * Names of files to be updated
     */
    public function files() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C7Ccb4653982C0C806242F61E2F6Baf9B\Files
    {
        return $this->files;
    }
}
