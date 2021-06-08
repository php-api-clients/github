<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListInstallationReposForAuthenticatedUser
{
    private const OPERATION_ID = 'apps/list-installation-repos-for-authenticated-user';
    /**installation_id parameter**/
    public int $installation_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($installation_id, int $per_page = 30, int $page = 1)
    {
        $this->installation_id = $installation_id;
        $this->per_page        = $per_page;
        $this->page            = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{installation_id}', '{per_page}', '{page}'], [$this->installation_id, $this->per_page, $this->page], '/user/installations/{installation_id}/repositories?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
