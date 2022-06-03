<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CodeSearchResultItem
{
    public const SCHEMA_TITLE = 'Code Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Code Search Result Item';
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private string $git_url;
    private string $html_url;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\MinimalRepository $repository;
    private int $score;
    private ?int $file_size = null;
    private ?string $language = null;
    private ?string $last_modified_at = null;
    private array $line_numbers = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    public function name() : string
    {
        return $this->name;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function git_url() : string
    {
        return $this->git_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function score() : int
    {
        return $this->score;
    }
    public function file_size() : ?int
    {
        return $this->file_size;
    }
    public function language() : ?string
    {
        return $this->language;
    }
    public function last_modified_at() : ?string
    {
        return $this->last_modified_at;
    }
    public function line_numbers() : array
    {
        return $this->line_numbers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\CodeSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
}
