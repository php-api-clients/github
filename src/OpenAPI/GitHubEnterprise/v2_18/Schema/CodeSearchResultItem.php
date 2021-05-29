<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class CodeSearchResultItem
{
    public const SCHEMA_TITLE       = 'Code Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Code Search Result Item';
    private ?string $name           = null;
    private ?string $path           = null;
    private ?string $sha            = null;
    private ?string $url            = null;
    private ?string $git_url        = null;
    private ?string $html_url       = null;
    /**
     * Minimal Repository
     */
    private array $repository         = [];
    private ?number $score            = null;
    private ?int $file_size           = null;
    private ?string $language         = null;
    private ?string $last_modified_at = null;
    private array $line_numbers       = [];
    private array $text_matches       = [];

    public function name(): ?string
    {
        return $this->name;
    }

    public function path(): ?string
    {
        return $this->path;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function git_url(): ?string
    {
        return $this->git_url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function score(): ?number
    {
        return $this->score;
    }

    public function file_size(): ?int
    {
        return $this->file_size;
    }

    public function language(): ?string
    {
        return $this->language;
    }

    public function last_modified_at(): ?string
    {
        return $this->last_modified_at;
    }

    public function line_numbers(): array
    {
        return $this->line_numbers;
    }

    public function text_matches(): array
    {
        return $this->text_matches;
    }
}
