<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

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

    public function processing_status(): ?string
    {
        return $this->processing_status;
    }

    public function analyses_url(): ?string
    {
        return $this->analyses_url;
    }
}
