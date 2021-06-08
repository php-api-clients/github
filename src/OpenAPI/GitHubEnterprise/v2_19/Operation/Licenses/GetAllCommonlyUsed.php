<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Licenses;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAllCommonlyUsed
{
    private const OPERATION_ID = 'licenses/get-all-commonly-used';
    public bool $featured;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($featured, int $per_page = 30, int $page = 1)
    {
        $this->featured = $featured;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{featured}', '{per_page}', '{page}'], [$this->featured, $this->per_page, $this->page], '/licenses?featured={featured}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
