<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class IssueEventProjectCard
{
    public const SCHEMA_JSON        = '{"title":"Issue Event Project Card","required":["url","id","project_url","project_id","column_name"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"project_url":{"type":"string","format":"uri"},"project_id":{"type":"integer"},"column_name":{"type":"string"},"previous_column_name":{"type":"string"}},"description":"Issue Event Project Card"}';
    public const SCHEMA_TITLE       = 'Issue Event Project Card';
    public const SCHEMA_DESCRIPTION = 'Issue Event Project Card';
    public ?string $url;
    public ?int $id;
    public ?string $project_url;
    public ?int $project_id;
    public ?string $column_name;
    public string $previous_column_name;

    public function __construct(string $url, int $id, string $project_url, int $project_id, string $column_name, string $previous_column_name)
    {
        $this->url                  = $url;
        $this->id                   = $id;
        $this->project_url          = $project_url;
        $this->project_id           = $project_id;
        $this->column_name          = $column_name;
        $this->previous_column_name = $previous_column_name;
    }
}
