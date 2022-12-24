<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C4D5A7480E2Da450B3D1C10Fab00773F0
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion."}}}';
    public const SCHEMA_TITLE = 'c_4d5a7480e2da450b3d1c10fab00773f0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    public function content() : string
    {
        return $this->content;
    }
}
