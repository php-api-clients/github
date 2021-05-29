<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ShortBlob
{
    public const SCHEMA_TITLE       = 'Short Blob';
    public const SCHEMA_DESCRIPTION = 'Short Blob';
    private ?string $url            = null;
    private ?string $sha            = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }
}
