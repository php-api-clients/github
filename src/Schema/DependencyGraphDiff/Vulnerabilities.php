<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\DependencyGraphDiff;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"severity":"critical","advisory_ghsa_id":"GHSA-rf4j-j272-fj86","advisory_summary":"A summary of the advisory.","advisory_url":"https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"}';
    public function __construct(public ?string $severity, public ?string $advisory_ghsa_id, public ?string $advisory_summary, public ?string $advisory_url)
    {
    }
}
