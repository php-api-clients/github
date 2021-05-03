<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisDeletion
{
    public const SCHEMA_TITLE = 'Analysis deletion';
    public const SPL_HASH = '00000000252f45510000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Successful deletion of a code scanning analysis';
    /**
     * Next deletable analysis in chain, without last analysis deletion confirmation
     */
    private ?string $next_analysis_url = null;
    /**
     * Next deletable analysis in chain, with last analysis deletion confirmation
     */
    private ?string $confirm_delete_url = null;
    public function next_analysis_url() : ?string
    {
        return $this->next_analysis_url;
    }
    public function confirm_delete_url() : ?string
    {
        return $this->confirm_delete_url;
    }
}
