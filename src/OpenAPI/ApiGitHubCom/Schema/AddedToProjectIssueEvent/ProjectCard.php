<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddedToProjectIssueEvent;

final readonly class ProjectCard
{
    public const SCHEMA_JSON        = '{"required":["id","url","project_id","project_url","column_name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $id;
    public ?string $url;
    public ?int $project_id;
    public ?string $project_url;
    public ?string $column_name;
    public string $previous_column_name;

    public function __construct(int $id, string $url, int $project_id, string $project_url, string $column_name, string $previous_column_name)
    {
        $this->id                   = $id;
        $this->url                  = $url;
        $this->project_id           = $project_id;
        $this->project_url          = $project_url;
        $this->column_name          = $column_name;
        $this->previous_column_name = $previous_column_name;
    }
}
