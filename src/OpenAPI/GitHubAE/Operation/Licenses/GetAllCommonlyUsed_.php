<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses;

final class GetAllCommonlyUsed_
{
    private const OPERATION_ID = 'licenses/get-all-commonly-used';
    private readonly bool $featured;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(bool $featured, int $per_page = 30, int $page = 1)
    {
        $this->featured = $featured;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{featured}', '{per_page}', '{page}'), array($this->featured, $this->per_page, $this->page), '/licenses?featured={featured}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
