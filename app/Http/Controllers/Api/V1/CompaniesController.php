<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Requests\PostRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Feedback\FeedbackRepository;
class CompaniesController extends Controller
{
    private $feedbackRepository;

	public function __construct(FeedbackRepository $feedbackRepository)
	{
		$this->feedbackRepository = $feedbackRepository;
	}
   
    public function store(PostRequest $request) {
		$this->feedbackRepository->save($request->all());

		return response(null, 200);
	}

}