<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Create\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["files"],"type":"object","properties":{"description":{"type":"string","description":"Description of the gist","examples":["Example Ruby script"]},"files":{"type":"object","description":"Names and content for the files that make up the gist","additionalProperties":{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"Content of the file","readOnly":false}}},"examples":[{"hello.rb":{"content":"puts \\"Hello, World!\\""}}]},"public":{"oneOf":[{"type":"boolean","description":"Flag indicating whether the gist is public","default":false,"examples":[true]},{"enum":["true","false"],"type":"string","default":"false","examples":["true"]}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Description of the gist
     */
    public string $description;
    /**
     * Names and content for the files that make up the gist
     */
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Create\Request\Applicationjson\Files $files;
    public mixed $public;
    public function __construct(string $description, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Gists\Create\Request\Applicationjson\Files $files, mixed $public)
    {
        $this->description = $description;
        $this->files = $files;
        $this->public = $public;
    }
}
