<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning;

final class ListAlertsForRepo_
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    public string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)"
    for a complete list of secret types.**/
    public string $secret_type;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    public string $resolution;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The number of results per page (max 100).**/
    public int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $state, $secret_type, $resolution, int $page = 1, int $per_page = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{secret_type}', '{resolution}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->state, $this->secret_type, $this->resolution, $this->page, $this->per_page), '/repos/{owner}/{repo}/secret-scanning/alerts?state={state}&secret_type={secret_type}&resolution={resolution}&page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
