<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff;

final class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}';
    public const SCHEMA_TITLE = 'DependencyGraphDiff\\Vulnerabilities';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $severity;
    public readonly string $advisory_ghsa_id;
    public readonly string $advisory_summary;
    public readonly string $advisory_url;
    public function __construct(string $severity, string $advisory_ghsa_id, string $advisory_summary, string $advisory_url)
    {
        $this->severity = $severity;
        $this->advisory_ghsa_id = $advisory_ghsa_id;
        $this->advisory_summary = $advisory_summary;
        $this->advisory_url = $advisory_url;
    }
}
