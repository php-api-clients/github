<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class List_
{
    public const OPERATION_ID    = 'orgs/list';
    public const OPERATION_MATCH = 'GET /organizations';
    private const METHOD         = 'GET';
    private const PATH           = '/organizations';
    /**An organization ID. Only return organizations with an ID greater than this ID. **/
    private int $since;
    /**The number of results per page (max 100). **/
    private int $perPage;

    public function __construct(int $since, int $perPage = 30)
    {
        $this->since   = $since;
        $this->perPage = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{since}', '{per_page}'], [$this->since, $this->perPage], self::PATH . '?since={since}&per_page={per_page}'));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return ['code' => 304];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
