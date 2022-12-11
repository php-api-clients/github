<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListAlertsForRepo_
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    private readonly string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Secret scanning patterns](https://docs.github.com/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)"
    for a complete list of secret types.**/
    private readonly string $secret_type;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    private readonly string $resolution;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor. To receive an initial cursor on your first request, include an empty "before" query string.**/
    private readonly string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.  To receive an initial cursor on your first request, include an empty "after" query string.**/
    private readonly string $after;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->before = $before;
        $this->after = $after;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{state}', '{secret_type}', '{resolution}', '{sort}', '{direction}', '{page}', '{per_page}', '{before}', '{after}'), array($this->owner, $this->repo, $this->state, $this->secret_type, $this->resolution, $this->sort, $this->direction, $this->page, $this->per_page, $this->before, $this->after), '/repos/{owner}/{repo}/secret-scanning/alerts?state={state}&secret_type={secret_type}&resolution={resolution}&sort={sort}&direction={direction}&page={page}&per_page={per_page}&before={before}&after={after}'));
    }
    function validateResponse()
    {
    }
}
