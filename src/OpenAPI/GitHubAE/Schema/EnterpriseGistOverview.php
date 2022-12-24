<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseGistOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Gist Stats","required":["total_gists","private_gists","public_gists"],"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Gist Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_gists;
    private int $private_gists;
    private int $public_gists;
    public function total_gists() : int
    {
        return $this->total_gists;
    }
    public function private_gists() : int
    {
        return $this->private_gists;
    }
    public function public_gists() : int
    {
        return $this->public_gists;
    }
}
