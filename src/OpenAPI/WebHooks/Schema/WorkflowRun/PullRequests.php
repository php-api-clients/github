<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\WorkflowRun;

final class PullRequests
{
    public const SCHEMA_TITLE = 'workflow-run::pull_requests';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $id;
    private int $number;
    private array $head = array();
    private array $base = array();
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function head() : array
    {
        return $this->head;
    }
    public function base() : array
    {
        return $this->base;
    }
}
