<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Dependabot;

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
    private string $secretName;
    private int $repositoryId;

    public function __construct(string $org, string $secretName, int $repositoryId)
    {
        $this->org          = $org;
        $this->secretName   = $secretName;
        $this->repositoryId = $repositoryId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secretName, $this->repositoryId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
