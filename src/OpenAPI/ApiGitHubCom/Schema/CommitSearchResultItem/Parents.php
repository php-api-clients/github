<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommitSearchResultItem;

final class Parents
{
    public const SCHEMA_TITLE       = 'commit-search-result-item::parents';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $html_url;
    private string $sha;

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function sha(): string
    {
        return $this->sha;
    }
}