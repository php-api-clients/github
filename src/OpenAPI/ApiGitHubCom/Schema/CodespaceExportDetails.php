<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespaceExportDetails
{
    public const SCHEMA_TITLE = 'Fetches information about an export of a codespace.';
    public const SCHEMA_DESCRIPTION = 'An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest';
    /**
     * State of the latest export
     */
    private ?string $state = null;
    /**
     * Completion time of the last export operation
     */
    private ?string $completed_at = null;
    /**
     * Name of the exported branch
     */
    private ?string $branch = null;
    /**
     * Git commit SHA of the exported branch
     */
    private ?string $sha = null;
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
    private ?string $html_url = null;
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
