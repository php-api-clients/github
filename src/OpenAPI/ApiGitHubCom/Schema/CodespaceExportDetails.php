<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespaceExportDetails
{
    public const SCHEMA_JSON = '{"title":"Fetches information about an export of a codespace.","type":"object","properties":{"state":{"type":["string","null"],"description":"State of the latest export","examples":["succeeded | failed | in_progress"]},"completed_at":{"type":["string","null"],"description":"Completion time of the last export operation","format":"date-time","examples":["2021-01-01T19:01:12Z"]},"branch":{"type":["string","null"],"description":"Name of the exported branch","examples":["codespace-monalisa-octocat-hello-world-g4wpq6h95q"]},"sha":{"type":["string","null"],"description":"Git commit SHA of the exported branch","examples":["fd95a81ca01e48ede9f39c799ecbcef817b8a3b2"]},"id":{"type":"string","description":"Id for the export details","examples":["latest"]},"export_url":{"type":"string","description":"Url for fetching export details","examples":["https:\\/\\/api.github.com\\/user\\/codespaces\\/:name\\/exports\\/latest"]},"html_url":{"type":["string","null"],"description":"Web url for the exported branch","examples":["https:\\/\\/github.com\\/octocat\\/hello-world\\/tree\\/:branch"]}},"description":"An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest"}';
    public const SCHEMA_TITLE = 'Fetches information about an export of a codespace.';
    public const SCHEMA_DESCRIPTION = 'An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest';
    /**
     * State of the latest export
     */
    private ?string $state;
    /**
     * Completion time of the last export operation
     */
    private ?string $completed_at;
    /**
     * Name of the exported branch
     */
    private ?string $branch;
    /**
     * Git commit SHA of the exported branch
     */
    private ?string $sha;
    /**
     * Id for the export details
     */
    private string $id;
    /**
     * Url for fetching export details
     */
    private string $export_url;
    /**
     * Web url for the exported branch
     */
    private ?string $html_url;
    /**
     * State of the latest export
     */
    public function state() : ?string
    {
        return $this->state;
    }
    /**
     * Completion time of the last export operation
     */
    public function completed_at() : ?string
    {
        return $this->completed_at;
    }
    /**
     * Name of the exported branch
     */
    public function branch() : ?string
    {
        return $this->branch;
    }
    /**
     * Git commit SHA of the exported branch
     */
    public function sha() : ?string
    {
        return $this->sha;
    }
    /**
     * Id for the export details
     */
    public function id() : string
    {
        return $this->id;
    }
    /**
     * Url for fetching export details
     */
    public function export_url() : string
    {
        return $this->export_url;
    }
    /**
     * Web url for the exported branch
     */
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
