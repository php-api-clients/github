<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyVerification implements VerificationInterface, EmptyResourceInterface
{
    /**
     * @return bool
     */
    public function verified() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function reason() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function signature() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function payload() : string
    {
        return null;
    }
}
