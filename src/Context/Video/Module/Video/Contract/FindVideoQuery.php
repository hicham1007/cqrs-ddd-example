<?php

namespace CodelyTv\Context\Video\Module\Video\Contract;

use CodelyTv\Shared\Domain\Bus\Query\Query;

final class FindVideoQuery implements Query
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}
