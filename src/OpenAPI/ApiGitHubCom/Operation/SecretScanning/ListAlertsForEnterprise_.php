<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListAlertsForEnterprise_
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
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
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private readonly string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private readonly string $after;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $enterprise, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $per_page = 30, string $before, string $after)
    {
        $this->enterprise = $enterprise;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->before = $before;
        $this->after = $after;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{state}', '{secret_type}', '{resolution}', '{sort}', '{direction}', '{per_page}', '{before}', '{after}'), array($this->enterprise, $this->state, $this->secret_type, $this->resolution, $this->sort, $this->direction, $this->per_page, $this->before, $this->after), '/enterprises/{enterprise}/secret-scanning/alerts?state={state}&secret_type={secret_type}&resolution={resolution}&sort={sort}&direction={direction}&per_page={per_page}&before={before}&after={after}'));
    }
    function validateResponse()
    {
    }
}
