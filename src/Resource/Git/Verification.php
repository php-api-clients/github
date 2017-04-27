<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\EmptyVerification")
 */
abstract class Verification extends AbstractResource implements VerificationInterface
{
    /**
     * @var bool
     */
    protected $verified;

    /**
     * @var string
     */
    protected $reason;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $payload;

    /**
     * @return bool
     */
    public function verified() : bool
    {
        return $this->verified;
    }

    /**
     * @return string
     */
    public function reason() : string
    {
        return $this->reason;
    }

    /**
     * @return string
     */
    public function signature() : string
    {
        return $this->signature;
    }

    /**
     * @return string
     */
    public function payload() : string
    {
        return $this->payload;
    }
}
