<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID    = 'dependabot/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    private int $repository_id;

    public function __construct(string $org, string $secret_name, int $repository_id)
    {
        $this->org           = $org;
        $this->secret_name   = $secret_name;
        $this->repository_id = $repository_id;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secret_name, $this->repository_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
