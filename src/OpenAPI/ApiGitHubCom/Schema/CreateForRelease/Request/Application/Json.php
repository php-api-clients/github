<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForRelease\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","laugh","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the release."}}}';
    public const SCHEMA_TITLE = 'CreateForRelease\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the release.
     */
    public readonly string $content;
    public function __construct(string $content)
    {
        $this->content = $content;
    }
}
