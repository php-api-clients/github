<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListAlertsForEnterprise
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    public string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[About secret scanning for private repositories](https://docs.github.com/code-security/secret-security/about-secret-scanning#about-secret-scanning-for-private-repositories)"
    for a complete list of secret types (API slug).**/
    public string $secret_type;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    public string $resolution;
    /**Results per page (max 100)**/
    public int $per_page;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    public string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    public string $after;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $state, $secret_type, $resolution, int $per_page = 30, $before, $after)
    {
        $this->enterprise = $enterprise;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->per_page = $per_page;
        $this->before = $before;
        $this->after = $after;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{state}', '{secret_type}', '{resolution}', '{per_page}', '{before}', '{after}'), array($this->enterprise, $this->state, $this->secret_type, $this->resolution, $this->per_page, $this->before, $this->after), '/enterprises/{enterprise}/secret-scanning/alerts?state={state}&secret_type={secret_type}&resolution={resolution}&per_page={per_page}&before={before}&after={after}'));
    }
    function validateResponse()
    {
    }
}
