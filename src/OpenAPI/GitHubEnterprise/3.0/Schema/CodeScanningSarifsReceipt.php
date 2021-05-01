<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class CodeScanningSarifsReceipt
{
    public const SCHEMA_TITLE = 'code-scanning-sarifs-receipt';
    public const SCHEMA_DESCRIPTION = '';
    /**An identifier for the upload.**/
    private string $id;
    /**The REST API URL for checking the status of the upload.**/
    private string $url;
    public function id() : string
    {
        return $this->id;
    }
    public function url() : string
    {
        return $this->url;
    }
}
