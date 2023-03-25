<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningAnalysisDeletion
{
    public const SCHEMA_JSON = '{"title":"Analysis deletion","required":["next_analysis_url","confirm_delete_url"],"type":"object","properties":{"next_analysis_url":{"type":["string","null"],"description":"Next deletable analysis in chain, without last analysis deletion confirmation","format":"uri","readOnly":true},"confirm_delete_url":{"type":["string","null"],"description":"Next deletable analysis in chain, with last analysis deletion confirmation","format":"uri","readOnly":true}},"description":"Successful deletion of a code scanning analysis"}';
    public const SCHEMA_TITLE = 'Analysis deletion';
    public const SCHEMA_DESCRIPTION = 'Successful deletion of a code scanning analysis';
    public const SCHEMA_EXAMPLE_DATA = '{"nextAnalysisUrl":"https:\\/\\/example.com\\/","confirmDeleteUrl":"https:\\/\\/example.com\\/"}';
    /**
     * nextAnalysisUrl: Next deletable analysis in chain, without last analysis deletion confirmation
     * confirmDeleteUrl: Next deletable analysis in chain, with last analysis deletion confirmation
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('next_analysis_url')] public ?string $nextAnalysisUrl, #[\EventSauce\ObjectHydrator\MapFrom('confirm_delete_url')] public ?string $confirmDeleteUrl)
    {
    }
}
