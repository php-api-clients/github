<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C07Dcb36B91F472Daa9474Ac97F1Ce862
{
    public const SCHEMA_JSON = '{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'c_07dcb36b91f472daa9474ac97f1ce862';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D $pull_request;
    public function html() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D
    {
        return $this->html;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF77B7Beed3678F701Df1Eadebe02277D
    {
        return $this->pull_request;
    }
}
