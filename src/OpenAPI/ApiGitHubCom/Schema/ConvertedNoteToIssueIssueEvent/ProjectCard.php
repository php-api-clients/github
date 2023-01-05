<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ConvertedNoteToIssueIssueEvent;

final class ProjectCard
{
    public const SCHEMA_JSON = '{"required":["id","url","project_id","project_url","column_name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ConvertedNoteToIssueIssueEvent\\ProjectCard';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $url;
    private int $project_id;
    private string $project_url;
    private string $column_name;
    private ?string $previous_column_name = null;
    public function id() : int
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function project_id() : int
    {
        return $this->project_id;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
    public function column_name() : string
    {
        return $this->column_name;
    }
    public function previous_column_name() : ?string
    {
        return $this->previous_column_name;
    }
}