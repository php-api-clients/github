<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SPL_HASH = '000000001c23f593000000003890ca58';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private int $number;
    private string $url;
    private object $head;
    private object $base;
    public function id() : int
    {
        return $this->id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function head() : object
    {
        return $this->head;
    }
    public function base() : object
    {
        return $this->base;
    }
}
