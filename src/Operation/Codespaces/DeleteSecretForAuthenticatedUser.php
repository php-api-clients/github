<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Codespaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSecretForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/delete-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/codespaces/secrets/{secret_name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/codespaces/secrets/{secret_name}';
    /**The name of the secret.**/
    private string $secretName;

    public function __construct(string $secretName)
    {
        $this->secretName = $secretName;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{secret_name}'], [$this->secretName], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
