<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveSelectedRepoFromOrgSecret
{
    private const OPERATION_ID = 'actions/remove-selected-repo-from-org-secret';
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;
    public int $repository_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $secret_name, $repository_id)
    {
        $this->org           = $org;
        $this->secret_name   = $secret_name;
        $this->repository_id = $repository_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secret_name, $this->repository_id], '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}?'));
    }

    function validateResponse(): void
    {
    }
}
