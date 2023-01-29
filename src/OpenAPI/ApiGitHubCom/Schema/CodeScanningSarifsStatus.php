<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete","failed"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true},"errors":{"type":["array","null"],"items":{"type":"string"},"description":"Any errors that ocurred during processing of the delivery.","readOnly":true}}}';
    public const SCHEMA_TITLE = 'code-scanning-sarifs-status';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * `pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed.
     */
    public readonly string $processing_status;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    public readonly ?string $analyses_url;
    /**
     * Any errors that ocurred during processing of the delivery.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus\Errors>
     */
    public readonly array $errors;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningSarifsStatus\Errors> $errors
     */
    public function __construct(string $processing_status, string $analyses_url, array $errors)
    {
        $this->processing_status = $processing_status;
        $this->analyses_url = $analyses_url;
        $this->errors = $errors;
    }
}
