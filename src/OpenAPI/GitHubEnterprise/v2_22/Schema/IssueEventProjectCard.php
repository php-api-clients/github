<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class IssueEventProjectCard
{
    public const SCHEMA_TITLE = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION = 'Issue Event Project Card';
    private ?string $url = null;
    private ?int $id = null;
    private ?string $project_url = null;
    private ?int $project_id = null;
    private ?string $column_name = null;
    private ?string $previous_column_name = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function project_url() : ?string
    {
        return $this->project_url;
    }
    public function project_id() : ?int
    {
        return $this->project_id;
    }
    public function column_name() : ?string
    {
        return $this->column_name;
    }
    public function previous_column_name() : ?string
    {
        return $this->previous_column_name;
    }
}
