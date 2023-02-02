<?php


namespace App\Models\Feedbacks;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class FeedbackFile extends Feedback
{
	public function save()
	{
        $name=$this->name;
        $phone=$this->phone;
        $text=$this->text;
		Storage::put("messages-$phone.txt","Имя:$name,Номер телефона:$phone,Сообщение:$text");
	}
}