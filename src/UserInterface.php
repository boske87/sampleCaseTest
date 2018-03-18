<?php
namespace UserAuth;
/**
 * all user classes must implement.
 */

interface UserInterface
{
    /**
     * @return mixed
     */
    public function getRoles();

    /**
     * @return mixed
     */
    public function getUsername();
}
