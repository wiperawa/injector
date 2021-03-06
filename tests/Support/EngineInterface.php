<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Support;

/**
 * EngineInterface defines car engine interface
 */
interface EngineInterface
{
    public function getName(): string;

    public function getPower(): int;
}
