<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DisableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID    = 'actions/disable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/permissions/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the repository. **/
    private int $repositoryId;

    public function __construct(string $org, int $repositoryId)
    {
        $this->org          = $org;
        $this->repositoryId = $repositoryId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{repository_id}'], [$this->org, $this->repositoryId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
