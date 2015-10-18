<?php
namespace Base\Controller;
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 14.10.15
 * Time: 12:19
 */

use \Base\Service\UserServiceInterface;

class UserController  extends \Base\App\Controller
{

    public $userService = null;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;

    }

    public function actionRun()
    {
        $this->userService->validate(2);
    }
}