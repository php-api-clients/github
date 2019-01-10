<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use Exception;
use Throwable;

final class ApiErrorException extends Exception
{
    /**
     * @var array
     */
    private $context = [];

    public static function create(string $message, int $code, Throwable $previous): self
    {
        return new self($message, $code, $previous);
    }

    public static function createWithErrors(string $message, int $code, array $errors, Throwable $previous): self
    {
        $exception = new self($message, $code, $previous);
        $exception->setContext($errors);

        return $exception;
    }

    public function getContext(): array
    {
        return $this->context;
    }

    private function setContext(array $context)
    {
        $this->context = $context;
    }
}
