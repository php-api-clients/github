<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespaceExportDetails
{
    public const SCHEMA_TITLE = 'Fetches information about an export of a codespace.';
    public const SCHEMA_DESCRIPTION = 'An export of a codespace. Also, latest export details for a codespace can be fetched with id = latest';
    /**
     * State of the latest export
     */
    private $state;
    /**
     * Completion time of the last export operation
     */
    private $completed_at;
    /**
     * Name of the exported branch
     */
    private $branch;
    /**
     * Git commit SHA of the exported branch
     */
    private $sha;
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
    private $html_url;
    /**
     * State of the latest export
     */
    public function state()
    {
        return $this->state;
    }
    /**
     * Completion time of the last export operation
     */
    public function completed_at()
    {
        return $this->completed_at;
    }
    /**
     * Name of the exported branch
     */
    public function branch()
    {
        return $this->branch;
    }
    /**
     * Git commit SHA of the exported branch
     */
    public function sha()
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
    public function html_url()
    {
        return $this->html_url;
    }
}
