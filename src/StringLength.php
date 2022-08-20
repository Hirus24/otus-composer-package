<?php

declare(strict_types=1);

namespace Tsyganokigor\OtusComposerPackage;

class StringLength
{
    public function getLength(string $sl): int
    {
        return mb_strlen ($sl);
    }
}