<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SPL_HASH = '000000000b4c01210000000005634a32';
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
