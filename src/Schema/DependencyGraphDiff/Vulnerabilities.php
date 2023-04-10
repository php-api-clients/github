<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\DependencyGraphDiff;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"severity":"critical","advisory_ghsa_id":"GHSA-rf4j-j272-fj86","advisory_summary":"A summary of the advisory.","advisory_url":"https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"}';
    public function __construct(public string $severity, #[\EventSauce\ObjectHydrator\MapFrom('advisory_ghsa_id')] public string $advisoryGhsaId, #[\EventSauce\ObjectHydrator\MapFrom('advisory_summary')] public string $advisorySummary, #[\EventSauce\ObjectHydrator\MapFrom('advisory_url')] public string $advisoryUrl)
    {
    }
}
