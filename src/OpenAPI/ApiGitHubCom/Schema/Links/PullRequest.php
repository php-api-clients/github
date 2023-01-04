<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Links;

final class PullRequest
{
    public const SCHEMA_JSON = '{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = '';
    private string $href;
    public function href() : string
    {
        return $this->href;
    }
}
