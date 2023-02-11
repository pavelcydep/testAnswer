<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Requests\PostRequest;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Feedback\FeedbackRepository;
class CompaniesController extends Controller
{
   
   
    public function store(PostRequest $request) {
		$this->feedbackRepository->save($request->all());

		return response(null, 200);
	}
 public function index(){
$answers=Test::all();
return response($answers, 200);
 }
}