<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class IssueEventProjectCard
{
    public const SCHEMA_JSON = '{"title":"Issue Event Project Card","required":["url","id","project_url","project_id","column_name"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}},"description":"Issue Event Project Card"}';
    public const SCHEMA_TITLE = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION = 'Issue Event Project Card';
    private string $url;
    private int $id;
    private string $project_url;
    private int $project_id;
    private string $column_name;
    private ?string $previous_column_name = null;
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
    public function project_id() : int
    {
        return $this->project_id;
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
