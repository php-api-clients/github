<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AnnouncementExpiration
{
    public const SCHEMA_TITLE = 'announcement-expiration';
    public const SCHEMA_DESCRIPTION = 'The time at which the announcement expires. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. To set an announcement that never expires, omit this parameter, set it to `null`, or set it to an empty string.';
}
