<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseGistOverview
{
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
