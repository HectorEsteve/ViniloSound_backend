<?php
namespace App\Http\Controllers;

use App\Models\RecordCompany;
use Illuminate\Http\Request;

class RecordCompanyController extends Controller{
    public function index(){
        $recordCompanies = RecordCompany::all();
        $data = [
            'message' => 'Record companies retrieved successfully',
            'recordCompanies' => $recordCompanies
        ];
        return response()->json($data);
    }

    public function show($id){
        $recordCompany = RecordCompany::find($id);
        if (!$recordCompany) {
            $data = [
                'message' => 'Record company not found',
                'recordCompany' => null
            ];
            return response()->json($data);
        }

        $data = [
            'message' => 'Record company retrieved successfully',
            'recordCompany' => $recordCompany
        ];
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:record_companies,name',
            'logo_url' => 'nullable|string',
            'active' => 'boolean',
            'website_url' => 'nullable|string|url'
        ]);

        $recordCompany = RecordCompany::create($request->all());
        $data = [
            'message' => 'Record company created successfully',
            'recordCompany' => $recordCompany
        ];
        return response()->json($data);
    }

    public function update(Request $request, $id){
        $recordCompany = RecordCompany::find($id);
        if (!$recordCompany) {
            $data = [
                'message' => 'Record company not found',
                'recordCompany' => null
            ];
            return response()->json($data);
        }

        $request->validate([
            'name' => 'required|string|unique:record_companies,name,' . $id,
            'logo_url' => 'nullable|string',
            'active' => 'boolean',
            'website_url' => 'nullable|string|url'
        ]);

        $recordCompany->update($request->all());
        $data = [
            'message' => 'Record company updated successfully',
            'recordCompany' => $recordCompany
        ];
        return response()->json($data);
    }

    public function destroy($id){
        $recordCompany = RecordCompany::find($id);
        if (!$recordCompany) {
            $data = [
                'message' => 'Record company not found',
                'recordCompany' => null
            ];
            return response()->json($data);
        }

        $recordCompany->delete();
        $data = [
            'message' => 'Record company deleted successfully',
            'recordCompany' => $recordCompany
        ];
        return response()->json($data);
    }
}

