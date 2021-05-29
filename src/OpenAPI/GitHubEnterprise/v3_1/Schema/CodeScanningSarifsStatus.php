<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CodeScanningSarifsStatus
{
    public const SCHEMA_TITLE       = 'code-scanning-sarifs-status';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     */
    private ?string $processing_status = null;
    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    private ?string $analyses_url = null;

    /**
     * `pending` files have not yet been processed, while `complete` means all results in the SARIF have been stored.
     */
    public function processing_status(): ?string
    {
        return $this->processing_status;
    }

    /**
     * The REST API URL for getting the analyses associated with the upload.
     */
    public function analyses_url(): ?string
    {
        return $this->analyses_url;
    }
}
