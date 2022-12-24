<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C09792Fbb1868840D0B6766E6069Bb25F
{
    public const SCHEMA_JSON = '{"required":["files"],"type":"object","properties":{"description":{"type":"string","description":"Description of the gist","examples":["Example Ruby script"]},"files":{"type":"object","description":"Names and content for the files that make up the gist","additionalProperties":{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"Content of the file","readOnly":false}}},"examples":[{"hello.rb":{"content":"puts \\"Hello, World!\\""}}]},"public":{"oneOf":[{"type":"boolean","description":"Flag indicating whether the gist is public","default":false,"examples":[true]},{"enum":["true","false"],"type":"string","default":"false","examples":["true"]}]}}}';
    public const SCHEMA_TITLE = 'c_09792fbb1868840d0b6766e6069bb25f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Description of the gist
     */
    private ?string $description = null;
    /**
     * Names and content for the files that make up the gist
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19E035D6196F3263A51B991Ef298D0Fd::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19E035D6196F3263A51B991Ef298D0Fd $files;
    private $public;
    /**
     * Description of the gist
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * Names and content for the files that make up the gist
     */
    public function files() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C19E035D6196F3263A51B991Ef298D0Fd
    {
        return $this->files;
    }
    public function public()
    {
        return $this->public;
    }
}
