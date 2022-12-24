<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C3A45Dacefdd5018C3Ca7B0E05Ffef9F9
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the issue."}}}';
    public const SCHEMA_TITLE = 'c_3a45dacefdd5018c3ca7b0e05ffef9f9';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the issue.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the issue.
     */
    public function content() : string
    {
        return $this->content;
    }
}
