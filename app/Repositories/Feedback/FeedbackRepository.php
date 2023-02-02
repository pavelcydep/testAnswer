<?php


namespace App\Repositories\Feedback;


use App\Factories\Feedback\FeedbackFactory;

class FeedbackRepository
{
	public static function save(array $data)
	{
		$feedbackDB = FeedbackFactory::makeFeedback('db');
		$feedbackDB->setName($data['name']);
		$feedbackDB->setPhone($data['phone']);
		$feedbackDB->setMessage($data['text']);
		$feedbackDB->save();
		$feedbackFile = FeedbackFactory::makeFeedback('file');
		$feedbackFile->setName($data['name']);
		$feedbackFile->setPhone($data['phone']);
		$feedbackFile->setMessage($data['text']);
		$feedbackFile->save();
	}
}
