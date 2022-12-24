<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CA6F203F73E7E9C864062B7349517Cc87
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the pull request review comment."}}}';
    public const SCHEMA_TITLE = 'c_a6f203f73e7e9c864062b7349517cc87';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the pull request review comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the pull request review comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
