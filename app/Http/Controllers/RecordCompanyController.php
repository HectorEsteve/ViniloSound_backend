<?php

namespace App\Http\Controllers;

use App\Models\RecordCompany;
use Illuminate\Http\Request;

class RecordCompanyController extends Controller{
    public function index(){
        $recordCompanies = RecordCompany::all();
        return response()->json($recordCompanies);
    }

    public function show($id){
        $recordCompany = RecordCompany::findOrFail($id);
        return response()->json($recordCompany);
    }

    public function store(Request $request){
        $recordCompany = RecordCompany::create($request->all());
        return response()->json($recordCompany, 201);
    }

    public function update(Request $request, $id){
        $recordCompany = RecordCompany::findOrFail($id);
        $recordCompany->update($request->all());
        return response()->json($recordCompany, 200);
    }

    public function destroy($id){
        RecordCompany::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
