<?php

declare(strict_types=1);

namespace App\Presenters;

use Alsan\Test\TestExtension;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
	public function renderDefault(): void
	{
		$test = new TestExtension();
		bdump($test);
	}
}
