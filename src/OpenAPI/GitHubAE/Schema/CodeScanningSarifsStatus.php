<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete","failed"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true},"errors":{"type":["array","null"],"items":{"type":"string"},"description":"Any errors that ocurred during processing of the delivery.","readOnly":true}}}';
    public const SCHEMA_TITLE = 'code-scanning-sarifs-status';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * `pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed.
     */
    private string $processing_status;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    private $analyses_url;
    /**
     * Any errors that ocurred during processing of the delivery.
     */
    private $errors;
    /**
     * `pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed.
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
    /**
     * Any errors that ocurred during processing of the delivery.
     */
    public function errors()
    {
        return $this->errors;
    }
}
