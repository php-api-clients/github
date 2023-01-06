<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForPullRequestReviewComment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reference\\/reactions#reaction-types) to add to the pull request review comment."}}}';
    public const SCHEMA_TITLE = 'CreateForPullRequestReviewComment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the pull request review comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/rest/reference/reactions#reaction-types) to add to the pull request review comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
