<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CAabf8Ff8C8D6420F6Bbe889B679Ed3C0
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"enum":["+1","laugh","heart","hooray","rocket","eyes"],"type":"string","description":"The [reaction type](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/reactions#reaction-types) to add to the release."}}}';
    public const SCHEMA_TITLE = 'c_aabf8ff8c8d6420f6bbe889b679ed3c0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the release.
     */
    private string $content;
    /**
     * The [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types) to add to the release.
     */
    public function content() : string
    {
        return $this->content;
    }
}
