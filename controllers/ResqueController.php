<?php
namespace xlerr\resque\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\FileHelper;

class ResqueController extends Controller
{
	public $defaultAction = 'help';

	public function actionHelp()
	{
		echo <<<EOF
/////////////////////////////
//         Resque          //
/////////////////////////////


EOF;
		return 0;
	}

	/**
	 * 启动消息列队处理器
	 * @return void
	 */
	public function actionStart()
	{
		$mypidFilePath = Yii::getAlias('@runtime/resque/mypid');
		FileHelper::createDirectory(dirname($mypidFilePath));
		file_put_contents($mypidFilePath, getmypid()) or
			die('Could not write PID information to ' . $PIDFILE);

		$worker = new \Resque_Worker('default');
		$worker->logLevel = \Resque_Worker::LOG_VERBOSE;
		$worker->work(5);
	}
}