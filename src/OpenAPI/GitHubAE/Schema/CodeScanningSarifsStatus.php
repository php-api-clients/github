<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeScanningSarifsStatus
{
    public const SCHEMA_TITLE = 'code-scanning-sarifs-status';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * `pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed.
     */
    private string $processing_status;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    private ?string $analyses_url = null;
    /**
     * Any errors that ocurred during processing of the delivery.
     */
    private array $errors = array();
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
    public function analyses_url() : ?string
    {
        return $this->analyses_url;
    }
    /**
     * Any errors that ocurred during processing of the delivery.
     */
    public function errors() : array
    {
        return $this->errors;
    }
}
