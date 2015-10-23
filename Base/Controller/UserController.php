<?php
namespace Base\Controller;
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 14.10.15
 * Time: 12:19
 */

use \Base\Service\UserServiceInterface;
use \Base\Service\QueueServiceInterface;

class UserController  extends \Base\App\Controller
{

    /**
     * @var UserServiceInterface|null
     */
    public $userService = null;

    /**
     * @var QueueServiceInterface|null
     */
    public $queueService = null;

    public function __construct(UserServiceInterface $userService, QueueServiceInterface $queueService)
    {
        $this->userService = $userService;
        $this->queueService = $queueService;
    }

    public function actionRun()
    {
        $this->userService->validate(2);
        $this->queueService->send('key', 'value');
    }
}