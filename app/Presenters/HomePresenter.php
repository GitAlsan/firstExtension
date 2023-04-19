<?php

declare(strict_types=1);

namespace App\Presenters;

use GitAlsan\Test\DI\TestExtension;
use Nette;


final class HomePresenter extends BasePresenter
{
	public function startup()
	{
		parent::startup();

		// check - is logged in
		$test = new TestExtension();
		$test->checkUserRole($this->user, 'AdminAudio', $this);
	}

	public function renderDefault(): void
	{
		bdump('GIT - Test branch');
	}
}
