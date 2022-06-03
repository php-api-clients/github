<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Announcement
{
    public const SCHEMA_TITLE = 'Enterprise Announcement';
    public const SCHEMA_DESCRIPTION = 'Enterprise global announcement';
    /**
     * The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/enterprise-server@3.0/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."
     */
    private string $announcement;
    /**
     * The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.
     */
    private ?string $expires_at = null;
    /**
     * The announcement text in GitHub Flavored Markdown. For more information about GitHub Flavored Markdown, see "[Basic writing and formatting syntax](https://docs.github.com/enterprise-server@3.0/github/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)."
     */
    public function announcement() : string
    {
        return $this->announcement;
    }
    /**
     * The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.
     */
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
}
