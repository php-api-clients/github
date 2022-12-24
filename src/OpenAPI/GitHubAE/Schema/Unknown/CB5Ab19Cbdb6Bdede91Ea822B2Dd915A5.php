<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CB5Ab19Cbdb6Bdede91Ea822B2Dd915A5
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the commit comment."}}}';
    public const SCHEMA_TITLE = 'c_b5ab19cbdb6bdede91ea822b2dd915a5';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the commit comment.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the commit comment.
     */
    public function content() : string
    {
        return $this->content;
    }
}
