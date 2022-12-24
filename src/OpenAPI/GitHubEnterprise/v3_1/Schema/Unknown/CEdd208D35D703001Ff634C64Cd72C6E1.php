<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CEdd208D35D703001Ff634C64Cd72C6E1
{
    public const SCHEMA_JSON = '{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_edd208d35d703001ff634c64cd72c6e1';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    /**
     * SHA for the reference
     */
    private string $sha;
    private string $url;
    public function type() : string
    {
        return $this->type;
    }
    /**
     * SHA for the reference
     */
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
}
