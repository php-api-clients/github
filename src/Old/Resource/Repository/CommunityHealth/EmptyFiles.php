<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\CommunityHealth;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyFiles implements FilesInterface, EmptyResourceInterface
{
    public function codeOfConduct(): CodeOfConduct
    {
        return null;
    }

    public function contributing(): Url
    {
        return null;
    }

    public function license(): License
    {
        return null;
    }

    public function readme(): Url
    {
        return null;
    }
}
