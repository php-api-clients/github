<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE       = 'Short Blob';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    private string $url;
    private string $sha;

    public function url(): string
    {
        return $this->url;
    }

    public function sha(): string
    {
        return $this->sha;
    }
}