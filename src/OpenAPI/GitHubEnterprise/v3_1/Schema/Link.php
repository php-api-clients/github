<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Link
{
    public const SCHEMA_JSON = '{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}';
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private string $href;
    public function href() : string
    {
        return $this->href;
    }
}
