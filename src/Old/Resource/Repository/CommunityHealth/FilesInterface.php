<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\CommunityHealth;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FilesInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\CommunityHealth\\Files';

    public function codeOfConduct(): CodeOfConduct;

    public function contributing(): Url;

    public function license(): License;

    public function readme(): Url;
}
