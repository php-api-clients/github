<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRestrictionsForOrg
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/interaction-limits';
    /**The organization name. The name is not case sensitive.**/
    private string $org;

    public function __construct(string $org)
    {
        $this->org = $org;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
