<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveRestrictionsForRepo
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/interaction-limits';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;

    public function __construct(string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
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
             * Response
             **/

            case 409:
                return ['code' => 409];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
