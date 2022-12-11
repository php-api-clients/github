<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisDeletion
{
    public const SCHEMA_TITLE = 'Analysis deletion';
    public const SCHEMA_DESCRIPTION = 'Successful deletion of a code scanning analysis';
    /**
     * Next deletable analysis in chain, without last analysis deletion confirmation
     */
    private $next_analysis_url;
    /**
     * Next deletable analysis in chain, with last analysis deletion confirmation
     */
    private $confirm_delete_url;
    /**
     * Next deletable analysis in chain, without last analysis deletion confirmation
     */
    public function next_analysis_url()
    {
        return $this->next_analysis_url;
    }
    /**
     * Next deletable analysis in chain, with last analysis deletion confirmation
     */
    public function confirm_delete_url()
    {
        return $this->confirm_delete_url;
    }
}
