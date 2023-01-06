<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForCommitComment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the commit comment."}}}';
    public const SCHEMA_TITLE = 'CreateForCommitComment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the commit comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the commit comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
