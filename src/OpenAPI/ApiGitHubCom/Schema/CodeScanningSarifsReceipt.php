<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CodeScanningSarifsReceipt
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"string","description":"An identifier for the upload.","examples":["6c81cd8e-b078-4ac3-a3be-1dad7dbd0b53"]},"url":{"type":"string","description":"The REST API URL for checking the status of the upload.","format":"uri","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An identifier for the upload.
     */
    public ?string $id;
    /**
     * The REST API URL for checking the status of the upload.
     */
    public ?string $url;
    public function __construct(string $id, string $url)
    {
        $this->id = $id;
        $this->url = $url;
    }
}
