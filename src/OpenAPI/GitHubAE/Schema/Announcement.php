<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Announcement
{
    public const SCHEMA_TITLE = 'Enterprise Announcement';
    public const SPL_HASH = '000000001ef898db000000007fdcfded';
    public const SCHEMA_DESCRIPTION = 'Enterprise global announcement';
    /**
     * The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Mastering markdown](https://guides.github.com/features/mastering-markdown/)."
     */
    private ?string $announcement = null;
    /**
     * The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.
     */
    private ?string $expires_at = null;
    public function announcement() : ?string
    {
        return $this->announcement;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
}
