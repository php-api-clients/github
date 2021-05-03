<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '000000005dfdd7980000000040885a06';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
