<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\CommunityHealth;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FilesInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\CommunityHealth\\Files';

    /**
     * @return CodeOfConduct
     */
    public function codeOfConduct() : CodeOfConduct;

    /**
     * @return Url
     */
    public function contributing() : Url;

    /**
     * @return License
     */
    public function license() : License;

    /**
     * @return Url
     */
    public function readme() : Url;
}
