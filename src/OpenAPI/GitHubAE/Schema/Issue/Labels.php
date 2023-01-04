<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue;

final class Labels
{
    public const SCHEMA_JSON = '{"oneOf":[{"type":"string"},{"type":"object","properties":{"id":{"type":"integer","format":"int64"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]},"default":{"type":"boolean"}}}]}';
    public const SCHEMA_TITLE = 'Issue\\Labels';
    public const SCHEMA_DESCRIPTION = '';
}
