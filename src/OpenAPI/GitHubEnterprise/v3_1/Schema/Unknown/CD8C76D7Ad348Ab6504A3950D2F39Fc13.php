<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CD8C76D7Ad348Ab6504A3950D2F39Fc13
{
    public const SCHEMA_JSON = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE = 'c_d8c76d7ad348ab6504a3950d2f39fc13';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The sha of the head commit.
     */
    private string $head_sha;
    /**
     * The sha of the head commit.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
}
