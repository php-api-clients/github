<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Git\NamedBlog as BaseNamedBlog;
use ApiClients\Client\Github\Resource\Git\NamedBlogInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class NamedBlog extends BaseNamedBlog
{
    public function refresh(): NamedBlog
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (NamedBlogInterface $namedBlog) {
            return $namedBlog->refresh();
        }));
    }
}
