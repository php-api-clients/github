<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SPL_HASH = '000000001ef8e5c8000000007fdcfded';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?int $number = null;
    private ?string $url = null;
    private ?object $head = null;
    private ?object $base = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function head() : ?object
    {
        return $this->head;
    }
    public function base() : ?object
    {
        return $this->base;
    }
}
