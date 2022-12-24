<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = 'code-scanning-sarifs-status';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     */
    private string $processing_status;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    private $analyses_url;
    /**
     * `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     */
    public function processing_status() : string
    {
        return $this->processing_status;
    }
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    public function analyses_url()
    {
        return $this->analyses_url;
    }
}
