<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependencyGraphDiff;

final class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["severity","advisory_ghsa_id","advisory_summary","advisory_url"],"type":"object","properties":{"severity":{"type":"string","examples":["critical"]},"advisory_ghsa_id":{"type":"string","examples":["GHSA-rf4j-j272-fj86"]},"advisory_summary":{"type":"string","examples":["A summary of the advisory."]},"advisory_url":{"type":"string","examples":["https:\\/\\/github.com\\/advisories\\/GHSA-rf4j-j272-fj86"]}}}';
    public const SCHEMA_TITLE = 'DependencyGraphDiff\\Vulnerabilities';
    public const SCHEMA_DESCRIPTION = '';
    private string $severity;
    private string $advisory_ghsa_id;
    private string $advisory_summary;
    private string $advisory_url;
    public function severity() : string
    {
        return $this->severity;
    }
    public function advisory_ghsa_id() : string
    {
        return $this->advisory_ghsa_id;
    }
    public function advisory_summary() : string
    {
        return $this->advisory_summary;
    }
    public function advisory_url() : string
    {
        return $this->advisory_url;
    }
}
