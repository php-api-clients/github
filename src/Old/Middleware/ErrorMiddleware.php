<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Middleware;

use ApiClients\Client\Github\ApiErrorException;
use ApiClients\Foundation\Middleware\Annotation\SecondLast;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PostTrait;
use ApiClients\Foundation\Middleware\PreTrait;
use ApiClients\Foundation\Transport\ParsedContentsInterface;
use ApiClients\Tools\Psr7\HttpStatusExceptions\BadRequestException;
use ApiClients\Tools\Psr7\HttpStatusExceptions\UnprocessableEntityException;
use React\Promise\CancellablePromiseInterface;
use Throwable;

use function React\Promise\reject;

final class ErrorMiddleware implements MiddlewareInterface
{
    use PreTrait;
    use PostTrait;

    /**
     * @param  array $options
     *
     * @SecondLast()
     */
    public function error(
        Throwable $throwable,
        string $transactionId,
        array $options = []
    ): CancellablePromiseInterface {
        if (
            $throwable instanceof UnprocessableEntityException ||
            $throwable instanceof BadRequestException
        ) {
            $response = $throwable->getResponse();
            $body     = $response->getBody();
            if (! ($body instanceof ParsedContentsInterface)) {
                return reject($throwable);
            }

            $contents = $body->getParsedContents();
            $message  = $contents['message'] ?? $throwable->getMessage();

            if (isset($contents['errors'])) {
                return reject(
                    ApiErrorException::createWithErrors(
                        $message,
                        $throwable->getCode(),
                        $contents['errors'],
                        $throwable
                    )
                );
            }

            return reject(
                ApiErrorException::create(
                    $message,
                    $throwable->getCode(),
                    $throwable
                )
            );
        }

        return reject($throwable);
    }
}
