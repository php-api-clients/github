<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class CodeScanningSarifsStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"processing_status":{"enum":["pending","complete","failed"],"type":"string","description":"`pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed."},"analyses_url":{"type":["string","null"],"description":"The REST API URL for getting the analyses associated with the upload.","format":"uri","readOnly":true},"errors":{"type":["array","null"],"items":{"type":"string"},"description":"Any errors that ocurred during processing of the delivery.","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"processing_status":"pending","analyses_url":"https:\\/\\/example.com\\/","errors":["generated_errors_null"]}';
    /**
     * processingStatus: `pending` files have not yet been processed, while `complete` means results from the SARIF have been stored. `failed` files have either not been processed at all, or could only be partially processed.
     * analysesUrl: The REST API URL for getting the analyses associated with the upload.
     * errors: Any errors that ocurred during processing of the delivery.
     * @param ?array<string> $errors
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('processing_status')] public ?string $processingStatus, #[\EventSauce\ObjectHydrator\MapFrom('analyses_url')] public ?string $analysesUrl, public ?array $errors)
    {
    }
}
