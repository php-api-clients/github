<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Dependabot;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID    = 'dependabot/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the secret. **/
    private string $secretName;
    private int $repositoryId;

    public function __construct(string $org, string $secretName, int $repositoryId)
    {
        $this->org          = $org;
        $this->secretName   = $secretName;
        $this->repositoryId = $repositoryId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secretName, $this->repositoryId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * No Content when repository was added to the selected list
             **/
            case 204:
                return ['code' => 204];
            /**
             * Conflict when visibility type is not set to selected
             **/

            case 409:
                return ['code' => 409];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
