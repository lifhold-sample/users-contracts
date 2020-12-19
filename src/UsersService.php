<?php

declare(strict_types=1);

namespace Lifhold\Users\Contracts;


use Lifhold\Users\Exceptions\UserModuleException;
use Lifhold\Users\Exceptions\UserNotFoundException;

interface UsersService
{
    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     * @throws UserModuleException
     */
    public function getOne(int $id): User;

    /**
     * @param string $email
     * @return User
     * @throws UserNotFoundException
     * @throws UserModuleException
     */
    public function findByEmail(string $email): User;

    /**
     * @param string $email
     * @param string $password
     * @return User
     * @throws UserModuleException
     */
    public function create(string $email, string $password): User;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}
