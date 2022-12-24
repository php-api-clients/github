<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAnalysisDeletion
{
    public const SCHEMA_JSON = '{"title":"Analysis deletion","required":["next_analysis_url","confirm_delete_url"],"type":"object","properties":{"next_analysis_url":{"type":["string","null"],"description":"Next deletable analysis in chain, without last analysis deletion confirmation","format":"uri","readOnly":true},"confirm_delete_url":{"type":["string","null"],"description":"Next deletable analysis in chain, with last analysis deletion confirmation","format":"uri","readOnly":true}},"description":"Successful deletion of a code scanning analysis"}';
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
