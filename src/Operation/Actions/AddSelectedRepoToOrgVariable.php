<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSelectedRepoToOrgVariable
{
    public const OPERATION_ID    = 'actions/add-selected-repo-to-org-variable';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the variable. **/
    private string $name;
    private int $repositoryId;

    public function __construct(string $org, string $name, int $repositoryId)
    {
        $this->org          = $org;
        $this->name         = $name;
        $this->repositoryId = $repositoryId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{name}', '{repository_id}'], [$this->org, $this->name, $this->repositoryId], self::PATH));
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
            /**
             * Response when the visibility of the variable is not set to `selected`
             **/

            case 409:
                return ['code' => 409];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
