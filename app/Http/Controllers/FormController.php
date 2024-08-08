<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Rules\BsDateRule;
use App\Rules\CustomRuleName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    function record() {
        $items = DB::table('form')->get();

        // (string) $update_date = dateConvert($items->value('update_date'));
        // (string) $date = dateConvert($items->value('date'));
        // (string) $call_date = dateConvert($items->value('call_date'));
        
        return view('record', compact('items'));
    }

    public function edit ($id) {
        $data = FormModel::find($id);
        return view('edit', compact('data'));
    }

    public function update( Request $request, $id) {
        $request->validate([
            'url' => 'string|nullable',
            'update_date' => ['string', 'nullable', new BsDateRule],
            'customer_name' => 'string|nullable',
            'address' => 'string|nullable',
            'user_name' => 'string|nullable',
            'password' => 'string|nullable',
            'server' => 'string|nullable',
            'folder' => 'string|nullable',
            'mode' => 'string|nullable',
            'date' => ['string', 'nullable', new BsDateRule],
            'call_date' => ['string', 'nullable', new BsDateRule],
            'response_type' => 'string|nullable',
            'database_detail' => 'string|nullable',
            'status' => 'integer|nullable|min:0|max:4',
            'age' => ['integer', 'nullable', new CustomRuleName]
        ]);

        $data = FormModel::find($id);
        $data->url = $request->input('url');
        $data->update_date = $request->update_date ? getIntDate($request->update_date) : null;
        $data->customer_name = $request->customer_name;
        $data->address = $request->address;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->server = $request->input('server');
        $data->folder = $request->folder;
        $data->mode = $request->mode;
        $data->date = $request->date ? getIntDate($request->date) : null;
        $data->call_date = $request->call_date ? getIntDate($request->call_date) : null;
        $data->response_type = $request->response_type;
        $data->database_detail = $request->database_detail;
        $data->status = $request->status;
        $data->age = $request->age;

        $data->save();

        return redirect()->route('record');
    }
    
    public function create()
    {
        return view('form');
    }

    public function destroy($id) {
        $item = FormModel::find($id);

        if($item) {
            $item->delete();
            return redirect()->route('record');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'string|nullable',
            'update_date' => ['string', 'nullable', new BsDateRule],
            'customer_name' => 'string|nullable',
            'address' => 'string|nullable',
            'user_name' => 'string|nullable',
            'password' => 'string|nullable',
            'server' => 'string|nullable',
            'folder' => 'string|nullable',
            'mode' => 'string|nullable',
            'date' => ['string', 'nullable', new BsDateRule],
            'call_date' => ['string', 'nullable', new BsDateRule],
            'response_type' => 'string|nullable',
            'database_detail' => 'string|nullable',
            'status' => 'integer|nullable|min:0|max:4',
            'age' => ['integer', 'nullable', new CustomRuleName]
        ]);
        

        $data = new FormModel();
        $data->url = $request->input('url');
        $data->update_date = $request->update_date ? getIntDate($request->update_date) : null;
        $data->customer_name = $request->customer_name;
        $data->address = $request->address;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->server = $request->input('server');
        $data->folder = $request->folder;
        $data->mode = $request->mode;
        $data->date = $request->date ? getIntDate($request->date) : null;
        $data->call_date = $request->call_date ? getIntDate($request->call_date) : null;
        $data->response_type = $request->response_type;
        $data->database_detail = $request->database_detail;
        $data->status = $request->status;
        $data->age = $request->age;


        $data->save();
        // FormModel::create($validatedData);

        return redirect('/form');
    }
}
