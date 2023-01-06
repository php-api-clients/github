<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForIssueComment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the issue comment."}}}';
    public const SCHEMA_TITLE = 'CreateForIssueComment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the issue comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the issue comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
