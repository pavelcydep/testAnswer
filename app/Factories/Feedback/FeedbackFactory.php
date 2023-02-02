<?php


namespace App\Factories\Feedback;


use App\Models\Feedbacks\Feedback;
use App\Models\Feedbacks\FeedbackDb;
use App\Models\Feedbacks\FeedbackFile;

class FeedbackFactory
{
	public static function makeFeedback($type_save): Feedback
	{
		switch ($type_save) {
			case 'db':
				return new FeedbackDb();
				break;
			case 'file':
				return new FeedbackFile();
				break;
			default:
				throw new \Exception('Не верный тип сохранения');
		}
	}
}
