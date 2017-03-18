<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Command;

use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Tools\TestUtilities\TestCase;

final class IteratePagesCommandTest extends TestCase
{
    public function testCommand()
    {
        $path = '/foo.bar';
        $command = new IteratePagesCommand($path);
        self::assertSame($path, $command->getPath());
    }
}
