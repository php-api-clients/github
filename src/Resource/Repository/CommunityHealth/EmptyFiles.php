<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\CommunityHealth;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyFiles implements FilesInterface, EmptyResourceInterface
{
    /**
     * @return CodeOfConduct
     */
    public function codeOfConduct() : CodeOfConduct
    {
        return null;
    }

    /**
     * @return Url
     */
    public function contributing() : Url
    {
        return null;
    }

    /**
     * @return License
     */
    public function license() : License
    {
        return null;
    }

    /**
     * @return Url
     */
    public function readme() : Url
    {
        return null;
    }
}
