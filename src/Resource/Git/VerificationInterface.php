<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface VerificationInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Verification';

    /**
     * @return bool
     */
    public function verified() : bool;

    /**
     * @return string
     */
    public function reason() : string;

    /**
     * @return string
     */
    public function signature() : string;

    /**
     * @return string
     */
    public function payload() : string;
}
