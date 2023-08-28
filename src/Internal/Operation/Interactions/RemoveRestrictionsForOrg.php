<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveRestrictionsForOrg
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/interaction-limits';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(string $org)
    {
        $this->org = $org;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    /** @return array{code: int} */
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
