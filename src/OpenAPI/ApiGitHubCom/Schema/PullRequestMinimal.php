<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SPL_HASH = '0000000020701ff60000000042193899';
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
