<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

final class GetBySlug_
{
    private const OPERATION_ID = 'apps/get-by-slug';
    /****/
    public string $app_slug;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($app_slug)
    {
        $this->app_slug = $app_slug;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{app_slug}'), array($this->app_slug), '/apps/{app_slug}'));
    }
    function validateResponse()
    {
    }
}
