<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SPL_HASH = '00000000252f40020000000029de5079';
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
