<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class PullRequests
{
    public const SCHEMA_JSON = '{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'WorkflowRun\\PullRequests';
    public const SCHEMA_DESCRIPTION = '';
    public readonly array $base;
    public readonly array $head;
    public readonly int $id;
    public readonly int $number;
    public readonly string $url;
    public function __construct(array $base, array $head, int $id, int $number, string $url)
    {
        $this->base = $base;
        $this->head = $head;
        $this->id = $id;
        $this->number = $number;
        $this->url = $url;
    }
}
