<?php

declare(strict_types=1);

namespace Lifhold\Users\Contracts;

/**
 * Interface User
 * @package Lifhold\Users\Contracts
 */
interface User
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getEmail(): string;
}
