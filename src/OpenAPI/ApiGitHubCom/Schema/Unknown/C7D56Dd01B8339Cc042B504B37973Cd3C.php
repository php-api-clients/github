<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C7D56Dd01B8339Cc042B504B37973Cd3C
{
    public const SCHEMA_JSON = '{"required":["cvss","cwes","ghsa_id","summary","description","severity","identifiers","references","published_at","updated_at","withdrawn_at","vulnerabilities"],"type":"object","properties":{"cvss":{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}},"description":{"type":"string"},"ghsa_id":{"type":"string"},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}},"published_at":{"type":"string"},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}},"severity":{"type":"string"},"summary":{"type":"string"},"updated_at":{"type":"string"},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}},"withdrawn_at":{"type":"string"}},"description":"The details of the security advisory, including summary, description, and severity."}';
    public const SCHEMA_TITLE = 'c_7d56dd01b8339cc042b504b37973cd3c';
    public const SCHEMA_DESCRIPTION = 'The details of the security advisory, including summary, description, and severity.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA304Ce1D51Cdba42045Aa15C0E7Cc885::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA304Ce1D51Cdba42045Aa15C0E7Cc885 $cvss;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF13B5Abfcdf31C822F9Dab191Db2Fc80>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF13B5Abfcdf31C822F9Dab191Db2Fc80::class)
     */
    private array $cwes = array();
    private string $description;
    private string $ghsa_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBcf0Aa249Ce55B8F7911Df479F4Cd41A>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBcf0Aa249Ce55B8F7911Df479F4Cd41A::class)
     */
    private array $identifiers = array();
    private string $published_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF0Fde5A19Ee34E3Aa811F484Fc1Caefd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF0Fde5A19Ee34E3Aa811F484Fc1Caefd::class)
     */
    private array $references = array();
    private string $severity;
    private string $summary;
    private string $updated_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C278Ff5F4Cb8445970Acb939Fd15Afc5C>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C278Ff5F4Cb8445970Acb939Fd15Afc5C::class)
     */
    private array $vulnerabilities = array();
    private string $withdrawn_at;
    public function cvss() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA304Ce1D51Cdba42045Aa15C0E7Cc885
    {
        return $this->cvss;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF13B5Abfcdf31C822F9Dab191Db2Fc80>
     */
    public function cwes() : array
    {
        return $this->cwes;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function ghsa_id() : string
    {
        return $this->ghsa_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CBcf0Aa249Ce55B8F7911Df479F4Cd41A>
     */
    public function identifiers() : array
    {
        return $this->identifiers;
    }
    public function published_at() : string
    {
        return $this->published_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF0Fde5A19Ee34E3Aa811F484Fc1Caefd>
     */
    public function references() : array
    {
        return $this->references;
    }
    public function severity() : string
    {
        return $this->severity;
    }
    public function summary() : string
    {
        return $this->summary;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C278Ff5F4Cb8445970Acb939Fd15Afc5C>
     */
    public function vulnerabilities() : array
    {
        return $this->vulnerabilities;
    }
    public function withdrawn_at() : string
    {
        return $this->withdrawn_at;
    }
}
